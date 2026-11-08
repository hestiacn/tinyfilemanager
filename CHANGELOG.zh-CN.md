# 📝 更新日志 (Changelog)

## [2.6.3] - 2026-11-09

本次更新在 2.6.2 基础上重点加固了会话与上传安全，修复了分块上传路径穿越隐患，增强了文本编码兼容性，并优化了 64 位 PHP 下的文件大小读取性能与移动端页面布局。

### ✨ 新增功能 (Features)
- **文本编码转换**：在 Windows 上创建或编辑的文件（默认 ANSI/GBK 编码）上传后，查看或编辑时经常显示乱码甚至问号。现在会自动识别并把这类文件转换成 UTF-8 再显示，优先按 GB18030（兼容 GBK）转换，不行再尝试 BIG5、ISO-8859-1、Windows-1252 等常见编码；服务器没装 mbstring 时也会用 iconv 兜底。文件详情页的「字符集」也会明确显示是 UTF-8 还是「已从 GBK/ANSI 转换」。
- **文件夹上传支持**：Dropzone 初始化新增 `clickable: true`，上传路径改为 `file.webkitRelativePath || file.fullPath || file.name` 并通过 `formData.append("fullpath", _path)` 提交，支持保留目录结构的文件夹上传。

### 🔒 安全加固 (Security)
- **会话 Cookie 安全属性**：PHP ≥ 7.3 时通过 `session_set_cookie_params()` 设置 `HttpOnly`、`SameSite=Lax`，并按 `$is_https` 自动启用 `secure`。
- **登录后会话重建**：登录校验成功后调用 `session_regenerate_id(true)`，防止会话固定（Session Fixation）攻击。
- **分块上传路径穿越修复**：`fullpath` 改为从 POST 表单读取，逐段校验（拒绝 `.`、`..` 及非法文件名），并用 `realpath()` 校验目标目录必须位于 `FM_ROOT_PATH` 之内，越界直接返回 `Path traversal attempt detected`。
- **上传扩展名白名单解析**：`explode(',', FM_UPLOAD_EXTENSION)` 后追加 `array_map('trim', ...)`，避免配置中带空格导致白名单失效。
- **Markdown 链接安全过滤**：`marked.use()` 覆写 `link` 渲染器，拦截 `javascript:` 等危险协议链接，仅放行 `http(s)://`、`mailto:`、相对路径与锚点。
- **上传表单移除隐藏 fullpath**：删除 `?upload=` 页面中预填 `FM_PATH` 的 `<input name="fullpath">`，改由前端按文件实际路径逐次提交，避免路径被伪造。

### 🚀 优化与改进 (Improvements)
- **64 位 PHP 文件大小读取加速**：`fm_get_size()` 在 `PHP_INT_SIZE >= 8` 时直接返回 `filesize()`，不再为每个文件启动 `stat`/外部进程，大目录列表性能明显提升。
- **语言列表初始化顺序修正**：`$lang_list` 移至 `fm_get_translations([])` 之前定义，消除未定义变量风险。
- **分块上传流程清理**：移除中间分块追加后冗余的 `success` 赋值，仅由最终合并分支返回成功，避免中间块误报；同时将同名文件自动重命名的目标目录由 `$path` 改为已校验的 `$folder`，确保重命名落在文件实际所在子目录内（`$folder` 即 `dirname($fullPath)` 的结果）。
- **`fullpath` 空值兜底**：`dzchunkindex`/`dztotalchunkcount` 使用 `??` 默认值，`fullpath` 缺失或校验失败时回退为 `fm_clean_path($filename)`。

### 🎨 视觉与 UI/UX (UI/UX)
- **设置/站点标识/帮助页响应式布局**：由固定 `col-md-8 offset-md-2` 改为 `row justify-content-center` + `col-md-8 col-11`，以修复 RTL 语言模式下容器不居中问题。
- **Dropzone 错误提示自适应**：错误消息改为 `width: max-content`、自动换行、居中对齐，长错误信息不再溢出。
- **RTL 适配增强**：Dropzone 预览/错误提示在 RTL 下贴右显示，`.go-back` 返回图标水平翻转；密码输入框与哈希结果框强制 `dir="ltr"` 左对齐，避免 RTL 环境下密码显示错乱。

### 🔧 修复 (Bug Fixes)
- **帮助页密码生成器布局**：输入组改为 `dir="rtl"` 容器 + 输入框 `dir="ltr"`，随机密码按钮与生成按钮在 RTL 模式下依然按照原格式显示。
- **`fm_get_size` 64 位性能优化**：在 64 位 PHP（PHP_INT_SIZE >= 8）下优先直接使用 filesize() 获取文件大小，避免为每个文件尝试启动 exec/stat 外部进程；仅在 filesize() 失败时回退到原有的 exec/COM 兜底逻辑。大目录列表性能明显提升，且在 exec 被禁用的环境下也省去了首次调用的探测步骤。

---

## [2.6.2] - 2026-11-07

本次更新在 2.6.1 基础上补充了直链一键复制、Ace 编辑器搜索框本地化与 RTL 适配，并统一了打包/解包类实现，同时增强了 URL 上传的健壮性并修复了错误地址仍显示成功上传的问题。

### ✨ 新增功能 (Features)
- **直链一键复制**：文件/文件夹的「直链」操作由新窗口打开改为点击即复制到剪贴板，成功后以 `toast` 提示（复制成功/失败均有多语言反馈），并兼容不支持 `navigator.clipboard` 的旧浏览器（回退 `execCommand('copy')`）。
- **Ace 编辑器搜索框本地化**：通过 `ace.config.nls` 覆写查找/替换/正则/区分大小写/全词匹配等文案，随界面语言切换。
- **编辑器默认语言映射大幅完善**：`$ext_language` 由十余项扩展至覆盖 Web、Shell、脚本、编译型、数据/配置/文档、模板等上百种扩展名（如 `vue`、`svelte`、`astro`、`zig`、`prisma`、`terraform`、`nginx`、`graphql`、`jinja` 等），高级编辑器可自动识别更多文件类型。

### 🎨 视觉与 UI/UX 升级 (UI/UX)
- **Ace 搜索框 RTL 适配**：新增 `adaptAceSearchBox()`，RTL 下自动切换 `.ace_search.left/.right`、调整替换按钮浮动方向，实现多语言自适应文本。
- **Markdown 内容区宽度收口**：`#markdown-content.card` 最大宽度由 `100%` 改为 `80vw`，让 md 文档阅读更舒适。
- **RTL 模态框关闭按钮修正**：`[dir="rtl"] .modal-header .btn-close` 的 `margin-right` 由 `0` 改为 `auto`，关闭按钮正确贴左。
- **Ace 搜索框左对齐样式**：新增 `.ace_search.left` 样式，RTL 下搜索框贴左显示且边框方向正确。

### 🚀 优化与改进 (Improvements)
- **复制逻辑统一封装**：新增公共 `copyText(text, onSuccess, onFail)`，Markdown 代码块复制与直链复制共用同一套「Clipboard API + `execCommand` 回退」逻辑，消除重复代码。
- **`event_callback` 改为闭包**：由全局函数改为 `$event_callback` 闭包，内部直接 `exit()`，避免遗漏 `exit` 导致继续执行。
- **打包/解包类合并重构**：`FM_SystemArchiver` 更名为 `FM_Archiver`，统一 `create()/unzip()` 返回 `['ok', 'msg']`；tar 分支改用 `chdir($workDir)` + `RecursiveIteratorIterator` 递归添加目录，`.tar.gz` 压缩后清理临时 `.tar`，异常时恢复工作目录并清理残留文件。
- **页脚年份逻辑简化**：`renderFooter()` 中起始年份校验改为 `ctype_digit` + 数值比较，起始年大于等于当前年或非法时仅显示当前年；`<span dir="ltr">` 包裹逻辑统一到分支外。

### 🌐 多语言与本地化 (i18n & Localization)
- **语言翻译扩充至 55 种**：在原有 34 种语言基础上新增 20 种（`az`、`bg`、`et`、`fil`、`ha`、`hi`、`hr`、`jv`、`kk`、`lt`、`lv`、`ms`、`my`、`sr`、`sw`、`ta`、`te`、`uk`、`ur`、`uz`），浏览器语言自动匹配覆盖范围进一步扩大。
- **语言代码统一为 BCP 47 规范**：将旧非标准缩写 `gr`→`el`、`cz`→`cs` 修正为 ISO 639-1 标准，并将下划线格式 `pt_BR`、`pt_PT`、`mn_MN` 统一为 BCP 47 连字符格式 `pt-BR`、`pt-PT`、`mn-MN`，提升浏览器 `navigator.language` 匹配准确度。

### 🔧 修复 (Bug Fixes)
- **URL 上传错误地址仍显示成功、生成空文件**：此前填写错误地址（404、域名不存在、被防盗链拦截等）时仍会提示上传成功，但打开是空文件。现在：
  - 文件名清洗改用 `preg_replace('/[.\x00-\x20]+$/', '', ...)`，并拦截空名、`.`、`..`。
  - `curl` 分支校验 HTTP 状态码是否为 `200`、下载文件是否为空；`curl_close()` 仅在 `PHP_VERSION_ID < 80500` 时调用（PHP 8.5 起废弃）。
  - 非 `curl` 分支开启 `ignore_errors`、解析响应状态码、校验空文件，并用 `finfo` 推断 MIME。
  - 所有失败分支统一 `@unlink($temp_file)` 并返回明确错误（`HTTP 状态码`、`Downloaded file is empty`、`Failed to move downloaded file` 等），不再静默“成功”。
  - 成功写入后 `@chmod($target_file, 0644)`，修复此前权限为 `600` 导致图片等文件无法加载的问题。
  - 强制要求 `$allowed_upload_extensions` 非空，未配置时直接拦截并提示（见 Breaking Changes）。

### ⚠️ 破坏性变更 (Breaking Changes)
- **`FM_SystemArchiver` 更名为 `FM_Archiver`**：如有二次开发直接引用旧类名，需同步修改；返回结构仍为 `['ok' => bool, 'msg' => string]`，调用方无需调整。
- **直链行为变更**：文件/文件夹的「直链」按钮不再新窗口打开，而是复制到剪贴板；如需预览，请进入文件详情页点击「打开」。其中 `.md`、`.json`、`.sh`、`.css`、`.js`、`.py`、`.txt`、`.log` 等以及首行为 `#!/bin/bash`、`#!/bin/sh` 的脚本会走 `?raw=` 输出，其余文件仍直接打开静态地址。
- **高级搜索不再支持正则语法**：`scan()` 中 `$filter` 经 `preg_quote` 转义，输入 `.*`、`[a-z]` 等将按字面量匹配。如依赖正则搜索，请改用其他方式。

---

## [2.6.1] - 2026-11-05

本次版本主要进行了依赖库版本升级，并在 2.6.0 的基础上全面重构了前端视觉体系，添加了 Markdown 文件的渲染查看支持，大幅提升了上传下载的安全性与稳定性。

### 🎨 视觉与 UI/UX 升级 (UI/UX)
- **图标库全面升级至 FontAwesome 7**：将全站旧版 `FontAwesome 4` 图标（如 `-o` 后缀）升级为最新的 `FontAwesome 7` 版本。
- **操作栏图标彩色化与居中**：文件列表的操作图标（删除、重命名、复制、直链、下载）新增专属背景色和悬停反馈。通过 Flex 布局实现了图标在正方形背景内的绝对居中。
- **自定义 SVG 图标**：FontAwesome 7 的新版图标风格趋于极简，与原版界面视觉不太统一。为保持风格一致，手动重绘了“链接”和“语言”图标，并封装为 `fm_link_icon()` 和 `fa_language()` 公共函数。
- **极致精简 CSS**：清理移除了数百行冗余和冲突的 CSS 代码，合并了深色模式逻辑，使页面加载更轻量、渲染更迅速。
- **复制页目录列表重构**：复制/移动目标文件夹选择页由 `<ul>` 改为 Bootstrap `list-group` 卡片式列表，支持悬停高亮与长文件名自动换行。

### ✨ 新增功能 (Features)
- **Markdown 完整渲染引擎**：引入 `marked.js`，支持完整的 Markdown 语法解析。添加 md 文档的代码块“一键复制”按钮（支持多语言状态反馈）。
- **Ace 编辑器大版本升级**：编辑器从 `1.32.2` 升级至 `v1.45.2`，支持最新语言模式与主题，并解决了缺少主题文件导致的加载 404 报错。
- **直链防乱码输出（`?raw=`）**：新增 `?raw=` 路由，让 `.md`、`.json`、`.sh`、`.css` 等文本文件以正确的 `Content-Type` 与 `charset=utf-8` 输出，解决点击“直链”查看文件时注释多语言乱码的问题。
- **自定义页脚起始年份**：后台「站点标识与备案」新增年份设置，支持显示 `© 2017`，或仅显示当前年份（填 `none` 或留空）。

### 🚀 优化与安全 (Improvements & Security)
- **Markdown XSS 防御**：新增 `fm_is_safe_markdown()` 函数。在文件上传（包含分块合并最后一步）时，自动剥离代码块和行内代码后，检测是否包含 `<script>` 或 `<?php`，防止恶意脚本注入。
- **URL 上传功能重构**：
  - 修复了带查询参数（如 `?token=123`）的 URL 无法获取正确文件名的问题（`strtok($url, '?#')`）。
  - 修复了上传后保存的文件权限为 `600` 导致加载的图像文件无权限的致命 Bug（现自动 `chmod 0644`）。
  - 增加了 User-Agent 伪装与 120 秒超时设置，防止被防盗链拦截或大文件下载中断。
- **高级搜索防泄漏**：重写了 `scan()` 函数，加入了 `realpath` 越界校验、`preg_quote` 正则转义，并利用 `RecursiveCallbackFilterIterator` 在遍历层拦截 `.trash` 等敏感隐藏文件，防止通过高级搜索窃取审计日志。
- **Dropzone 库升级至 6.3.5**：新版 API 不再推荐全局配置，初始化方式由 `Dropzone.options.fileUploader` 改为 `new Dropzone("#fileUploader",)`，并新增缩略图加载失败的多语言提示（`dictThumbnailError`）。
- **SFW（Flash）播放器适配**：使用 `Ruffle` 引擎渲染 `.swf` 文件，重构了播放器容器，强制限制最大高度（`60vh`），解决移动端和 PC 端 Flash 画面溢出问题。

### 🔧 修复 (Bug Fixes)
- **权限导致无法保存**：解决了因 Linux 服务器 `Nginx/PHP-FPM` 运行用户（如 `www` / `www-data`）与上传文件属主（`root`）不一致导致的无法保存问题。

### ⚠️ 破坏性变更 (Breaking Changes)
- **废弃自带图标替换**：原版的自带 `FontAwesome 4` 类名已完全废弃，如需二次开发请查阅 `FA7` 对应名称。
- **上传扩展名强制校验**：如果系统未配置 `$allowed_upload_extensions`，URL 上传将直接报错拦截，不再默认放行所有格式。

---

## [2.6.0] - 2026-10-31

这是一个具有里程碑意义的重大版本更新。本次更新全面重构了多语言支持（添加适配 RTL 从右向左排版）、增强了系统级文件打包能力，并新增了大量功能与 UI/UX 优化。

### ✨ 新增功能 (Features)
- **添加了 RTL（从右向左）方向支持**：完美支持阿拉伯语、希伯来语等，动态加载 Bootstrap RTL 样式，并针对表格、预览、下拉菜单、文本对齐等进行了全方位的适配。
- **语言翻译**：更新完善了 35 种语言的翻译。添加了根据浏览器请求头自动匹配语言的检测逻辑，不同语言的访问者将自动切换至对应母语，不再被固定的站点语言搞得一脸懵逼，完整地将多语言翻译利用了起来。
- **系统级打包/解包引擎**：移除原有的 PHP `ZipArchive`/`PharData` 依赖，新增 `FM_SystemArchiver` 类。通过 `proc_open` 调用系统底层原生的 `zip` 和 `tar` 命令，大幅降低大文件打包时的内存占用。
- **支持 `.tar.gz` 压缩格式**：打包与解压全面兼容 `.tar`、`.tar.gz` 和 `.tgz`。
- **站点标识与备案设置**：新增独立站点设置页面，支持自定义站点名称、Logo、Favicon，并添加了中国大陆 ICP 备案与公安联网备案号集成。
- **操作审计日志**：新增 `fm_write_log()`，所有文件的增删改查、移动、复制、打包、上传等操作均会记录到 `.audit.log` 中。
- **回收站机制**：删除文件不再直接物理删除，而是自动移动到 `.trash` 目录并附带时间戳。为文件删除做个缓冲期，防止错误删除导致不必要的损失。
- **强密码生成器**：添加了强度检测，实时评估密码并给出优化建议。
- **音频与 Flash 媒体增强**：手写了带频谱动画的音频播放器，并引入了 Ruffle 引擎以支持 `.swf` 格式的播放，让经典焕发新生。
- **文件列表分页功能**：新增了列表分页支持，默认每页展示 50 条记录。站点管理员可在设置页面中自由开启或关闭（`EnablePaging`），并提供了详细的说明提示（`PagingInfoHelp`），以便在处理海量文件时，兼顾性能与易用性。

### 🚀 优化与体验 (Improvements)
- **标准化语言代码**：全面修正了语言代码的命名规范（使用标准的 BCP 47 格式）。将旧版的非标准缩写（如 `gr`、`cz`）修正为 `el`、`cs`，并将下划线格式（如 `pt_BR`、`mn_MN`）统一改为连字符格式（`pt-BR`、`mn-MN`），大幅提升了浏览器原生 API 对多语言环境的识别准确度。
- **时区自动校准**：自动识别访问者的本地时区并自动调整文件修改时间显示。
- **日期时间本地化**：支持根据当前语言自定义日期格式（如中文 `Y年m月d日`，英文 `m/d/Y`）。
- **主题无缝切换**：重构了亮暗模式切换逻辑，支持无刷新即时切换并记住用户偏好。
- **高级搜索 UI 升级**：搜索结果统计显示、一键清空搜索文本。
- **文件详情页排版优化**：利用 `<span dir="ltr">` 完美解决了 RTL 环境下文件路径、尺寸、时间、MIME 类型的乱码和错位问题。
- **悬浮 Tooltip 美化**：使用 Bootstrap Tooltip 替换原生 `title`，并适配明暗主题。

### 🔧 修复 (Bug Fixes)
- **Bidi 文本错乱**：修复了多语言状态下，文件名包含英文和数字时的双向文本乱码问题。
- **RTL 搜索框挤压**：修复了在 RTL 模式下，搜索框因 Flex 布局引起的挤压和换行问题。
- **`.tar.gz` 后缀截断**：修复了上传同名 `.tar.gz` 文件时，自动重命名导致后缀被错误截断的 Bug。
- **登录失效路径丢失**：修复了登录失效（Session 过期）导致原访问路径丢失的 Bug。重新登录后会自动定位到原路径，避免用户重新寻找路径。

### ⚠️ 破坏性变更 (Breaking Changes)
- **移除废弃类**：彻底删除了 `FM_Zipper` 和 `FM_Zipper_Tar` 类，请确保服务器环境支持 `proc_open` 及安装了原生 `zip`/`tar` 工具。
- **配置文件重构**：彻底移除了 config 中的 theme 和 lang 字段，改为通过浏览器的 Cookie 和 localStorage 保存偏好。现在每个访问者访问同一个站点，都可以显示各自独立的语言文本和主题。