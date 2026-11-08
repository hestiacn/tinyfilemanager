# 📝 Changelog

## [2.6.3] - 2026-11-09

This update, building on 2.6.2, focuses on hardening session and upload security, fixes a path traversal vulnerability in chunked uploads, improves text encoding compatibility, and optimizes file size reading performance on 64-bit PHP along with mobile page layout.

### ✨ Features
- **text encoding conversion**: Files created or edited on Windows (which default to ANSI/GBK encoding) often displayed garbled text or even question marks after being uploaded and viewed or edited. The system now automatically detects and converts such files to UTF-8 before display, prioritizing GB18030 (which is compatible with GBK), then falling back to common encodings such as BIG5, ISO-8859-1, and Windows-1252; if `mbstring` is not installed on the server, `iconv` is used as a fallback. The "Charset" field on the file details page now clearly indicates whether the content is UTF-8 or "Converted from GBK/ANSI".
- **Folder upload support**: Dropzone initialization now includes `clickable: true`, and the upload path is determined via `file.webkitRelativePath || file.fullPath || file.name` and submitted through `formData.append("fullpath", _path)`, enabling folder uploads that preserve directory structure.

### 🔒 Security
- **Secure session cookie attributes**: On PHP ≥ 7.3, `session_set_cookie_params()` is used to set `HttpOnly` and `SameSite=Lax`, and `secure` is automatically enabled based on `$is_https`.
- **Session regeneration after login**: `session_regenerate_id(true)` is called after successful login verification to prevent session fixation attacks.
- **Path traversal fix in chunked uploads**: `fullpath` is now read from the POST form and validated segment by segment (rejecting `.`, `..`, and invalid filenames), with `realpath()` used to verify that the target directory resides within `FM_ROOT_PATH`; any out-of-bounds attempt immediately returns `Path traversal attempt detected`.
- **Upload extension whitelist parsing**: `array_map('trim', ...)` is now applied after `explode(',', FM_UPLOAD_EXTENSION)`, preventing whitespace in the configuration from invalidating the whitelist.
- **Markdown link security filtering**: `marked.use()` overrides the `link` renderer to block dangerous protocol links such as `javascript:`, allowing only `http(s)://`, `mailto:`, relative paths, and anchors.
- **Removal of hidden fullpath field from upload form**: The `<input name="fullpath">` that pre-filled `FM_PATH` on the `?upload=` page has been removed; the frontend now submits the actual path per file instead, preventing path forgery.

### 🚀 Improvements
- **Faster file size reading on 64-bit PHP**: `fm_get_size()` now returns `filesize()` directly when `PHP_INT_SIZE >= 8`, eliminating the need to spawn `stat` or external processes for each file and significantly improving performance when listing large directories.
- **Language list initialization order fix**: `$lang_list` is now defined before `fm_get_translations([])`, eliminating the risk of undefined variables.
- **Chunked upload flow cleanup**: Redundant `success` assignments after intermediate chunk appends have been removed; success is now returned only by the final merge branch, preventing intermediate chunks from falsely reporting success. Additionally, the target directory for automatic renaming of same-name files has been changed from `$path` to the validated `$folder`, ensuring that renamed files remain in the subdirectory where the file actually resides (`$folder` is the result of `dirname($fullPath)`).
- **`fullpath` fallback for empty values**: `dzchunkindex`/`dztotalchunkcount` now use `??` defaults, and when `fullpath` is missing or fails validation, it falls back to `fm_clean_path($filename)`.

### 🎨 Visual & UI/UX
- **Responsive layout for Settings / Site Identity / Help pages**: Changed from fixed `col-md-8 offset-md-2` to `row justify-content-center` + `col-md-8 col-11` to fix container centering issues in RTL language modes.
- **Adaptive Dropzone error messages**: Error messages now use `width: max-content`, wrap automatically, and are center-aligned, so long error messages no longer overflow.
- **Enhanced RTL support**: Dropzone previews and error messages are now right-aligned in RTL; the `.go-back` icon is horizontally flipped; password input fields and hash result fields are forced to `dir="ltr"` and left-aligned to prevent password display issues in RTL environments.

### 🔧 Bug Fixes
- **Password generator layout on Help page**: The input group has been changed to a `dir="rtl"` container with a `dir="ltr"` input field, so the random password button and generate button retain their original layout in RTL mode.
- **`fm_get_size` 64-bit performance optimization**: On 64-bit PHP (`PHP_INT_SIZE >= 8`), `filesize()` is now used directly to obtain file size, avoiding an `exec`/`stat` external process for every file; the original `exec`/COM fallback is only used when `filesize()` fails. Listing large directories is noticeably faster, and environments where `exec` is disabled also skip the initial detection step.

---

## [2.6.2] - 2026-11-07

This update builds on 2.6.1 by adding one-click copy for direct links, localization of the Ace editor search box and RTL adaptation, unifying the archive/unarchive class implementation, and improving the robustness of URL upload while fixing the issue where invalid URLs were still reported as successfully uploaded.

### ✨ Features
- **One-click copy for direct links**: The "Direct Link" action for files/folders now copies the link to the clipboard instead of opening it in a new window, with a `toast` notification on success (localized feedback for both success and failure), and fallback support for older browsers without `navigator.clipboard` (using `execCommand('copy')`).
- **Ace editor search box localization**: Overrides the find/replace/regex/case-sensitive/whole-word texts via `ace.config.nls`, following the interface language.
- **Greatly expanded default language mapping**: `$ext_language` has been expanded from a dozen entries to over a hundred extensions covering Web, Shell, scripting, compiled, data/config/docs, and template file types (e.g. `vue`, `svelte`, `astro`, `zig`, `prisma`, `terraform`, `nginx`, `graphql`, `jinja`), so the advanced editor can auto-detect more file types.

### 🎨 Visual & UI/UX Upgrades
- **Ace search box RTL adaptation**: Added `adaptAceSearchBox()`, which automatically toggles `.ace_search.left/.right` in RTL, adjusts the float direction of the replace button, and enables language-adaptive text.
- **Markdown content width constrained**: The max-width of `#markdown-content.card` has been changed from `100%` to `80vw`, making Markdown documents more comfortable to read.
- **RTL modal close button fix**: The `margin-right` of `[dir="rtl"] .modal-header .btn-close` has been changed from `0` to `auto`, so the close button is correctly aligned to the left.
- **Ace search box left-alignment style**: Added the `.ace_search.left` style, so the search box is left-aligned with correct border direction in RTL.

### 🚀 Improvements
- **Unified copy logic**: Added a shared `copyText(text, onSuccess, onFail)` helper, which is reused by both Markdown code-block copy and direct-link copy with the same "Clipboard API + `execCommand` fallback" logic, eliminating duplicated code.
- **`event_callback` converted to a closure**: Replaced the global function with a `$event_callback` closure that calls `exit()` internally, preventing continued execution when `exit` is omitted.
- **Archive/unarchive class merged and refactored**: `FM_SystemArchiver` has been renamed to `FM_Archiver`, with `create()/unzip()` unified to return `['ok', 'msg']`; the tar branch now uses `chdir($workDir)` + `RecursiveIteratorIterator` for recursive directory traversal, cleans up the temporary `.tar` after `.tar.gz` compression, and restores the working directory and cleans up leftovers on exceptions.
- **Footer year logic simplified**: In `renderFooter()`, the start-year validation now uses `ctype_digit` plus numeric comparison; when the start year is greater than or equal to the current year or invalid, only the current year is displayed; the `<span dir="ltr">` wrapping logic has been moved outside the branches.

### 🌐 Internationalization & Localization (i18n & Localization)
- **Language translations expanded to 55**: Added 20 new languages on top of the original 34 (`az`, `bg`, `et`, `fil`, `ha`, `hi`, `hr`, `jv`, `kk`, `lt`, `lv`, `ms`, `my`, `sr`, `sw`, `ta`, `te`, `uk`, `ur`, `uz`), further expanding browser language auto-matching coverage.
- **Language codes unified to BCP 47**: Corrected legacy non-standard abbreviations `gr`→`el` and `cz`→`cs` to ISO 639-1, and unified underscore formats `pt_BR`, `pt_PT`, `mn_MN` to BCP 47 hyphenated `pt-BR`, `pt-PT`, `mn-MN`, improving `navigator.language` matching accuracy.

### 🔧 Bug Fixes
- **URL upload reported success for invalid URLs and produced empty files**: Previously, entering an invalid URL (404, non-existent domain, hotlink-blocked, etc.) still reported a successful upload, but the file would open as empty. Now:
  - Filename sanitization now uses `preg_replace('/[.\x00-\x20]+$/', '', ...)` and rejects empty names, `.`, and `..`.
  - The `curl` branch now verifies that the HTTP status code is `200` and that the downloaded file is not empty; `curl_close()` is only called when `PHP_VERSION_ID < 80500` (deprecated since PHP 8.5).
  - The non-`curl` branch now enables `ignore_errors`, parses the response status code, checks for empty files, and uses `finfo` to infer the MIME type.
  - All failure branches now uniformly call `@unlink($temp_file)` and return a clear error (`HTTP status code`, `Downloaded file is empty`, `Failed to move downloaded file`, etc.) instead of silently "succeeding".
  - After a successful write, `@chmod($target_file, 0644)` is applied, fixing the previous issue where files were saved with `600` permissions and images could not be loaded.
  - `$allowed_upload_extensions` is now required to be non-empty; if not configured, uploads are intercepted with a prompt (see Breaking Changes).

### ⚠️ Breaking Changes
- **`FM_SystemArchiver` renamed to `FM_Archiver`**: If your custom code directly references the old class name, you need to update it accordingly; the return structure remains `['ok' => bool, 'msg' => string]`, so callers do not need to change.
- **Direct-link behavior changed**: The "Direct Link" button for files/folders no longer opens in a new window but copies to the clipboard; to preview, open the file detail page and click "Open". Files such as `.md`, `.json`, `.sh`, `.css`, `.js`, `.py`, `.txt`, `.log`, and scripts whose first line is `#!/bin/bash` or `#!/bin/sh` go through `?raw=` output, while other files still open their static URL directly.
- **Advanced search no longer supports regex syntax**: In `scan()`, `$filter` is escaped via `preg_quote`, so inputs like `.*` or `[a-z]` will be matched literally. If you rely on regex search, please use another method.

---

## [2.6.1] - 2026-11-05

This release mainly upgrades dependency library versions and, building on 2.6.0, fully refactors the front-end visual system, adds Markdown file rendering support, and greatly improves the security and stability of uploads and downloads.

### 🎨 Visual & UI/UX Upgrades
- **Icon library fully upgraded to FontAwesome 7**: All legacy `FontAwesome 4` icons (e.g. the `-o` suffix) have been upgraded to the latest `FontAwesome 7` version.
- **Action bar icons colorized and centered**: Action icons in the file list (delete, rename, copy, direct link, download) now have dedicated background colors and hover feedback. Flex layout is used to perfectly center the icons within their square backgrounds.
- **Custom SVG icons**: FontAwesome 7's new icon style is quite minimal and doesn't match the original interface's look. To keep the style consistent, the "link" and "language" icons were manually redrawn and wrapped into the `fm_link_icon()` and `fa_language()` helper functions.
- **Extreme CSS slimming**: Hundreds of lines of redundant and conflicting CSS have been removed, and dark-mode logic has been merged, making page loading lighter and rendering faster.
- **Copy page directory list refactored**: The target folder selection page for copy/move has been changed from `<ul>` to a Bootstrap `list-group` card list, with hover highlighting and automatic wrapping for long filenames.

### ✨ Features
- **Full Markdown rendering engine**: Introduced `marked.js` for full Markdown syntax parsing. Added a "one-click copy" button for code blocks in md documents (with localized status feedback).
- **Major Ace editor upgrade**: The editor has been upgraded from `1.32.2` to `v1.45.2`, supporting the latest language modes and themes, and fixing the 404 loading error caused by missing theme files.
- **Direct-link anti-garbled output (`?raw=`)**: Added a `?raw=` route that outputs `.md`, `.json`, `.sh`, `.css` and other text files with the correct `Content-Type` and `charset=utf-8`, fixing garbled multilingual comments when viewing files via "Direct Link".
- **Custom footer start year**: The "Site Identity & Filing" admin page now has a year setting, supporting display as `© 2017` or only the current year (enter `none` or leave empty).

### 🚀 Improvements & Security
- **Markdown XSS defense**: Added the `fm_is_safe_markdown()` function. During file upload (including the final step of chunked merging), it strips code blocks and inline code before checking for `<script>` or `<?php`, preventing malicious script injection.
- **URL upload refactored**:
  - Fixed the issue where URLs with query parameters (e.g. `?token=123`) could not obtain the correct filename (`strtok($url, '?#')`).
  - Fixed a critical bug where uploaded files were saved with `600` permissions, causing loaded images to have no access (now `chmod 0644` is applied automatically).
  - Added User-Agent spoofing and a 120-second timeout to avoid hotlink blocking or interruption of large file downloads.
- **Advanced search leak prevention**: Rewrote the `scan()` function, adding `realpath` boundary checks, `preg_quote` regex escaping, and using `RecursiveCallbackFilterIterator` to block sensitive hidden files such as `.trash` at the traversal level, preventing the audit log from being stolen via advanced search.
- **Dropzone upgraded to 6.3.5**: The new API no longer recommends global configuration; initialization has been changed from `Dropzone.options.fileUploader` to `new Dropzone("#fileUploader",)`, and a localized prompt for thumbnail load failures (`dictThumbnailError`) has been added.
- **SFW (Flash) player adaptation**: Uses the `Ruffle` engine to render `.swf` files, with the player container refactored to enforce a maximum height (`60vh`), fixing Flash overflow on mobile and PC.

### 🔧 Bug Fixes
- **Permissions causing save failures**: Fixed the issue where files could not be saved because the Linux server's `Nginx/PHP-FPM` runtime user (e.g. `www` / `www-data`) differed from the uploaded file owner (`root`).

### ⚠️ Breaking Changes
- **Built-in icon replacement deprecated**: The original built-in `FontAwesome 4` class names are now fully deprecated; for secondary development, please refer to the corresponding `FA7` names.
- **Mandatory upload extension validation**: If `$allowed_upload_extensions` is not configured on the system, URL uploads will be rejected with an error instead of allowing all formats by default.

---

## [2.6.0] - 2026-10-31

This is a milestone release. It fully refactors multilingual support (adding RTL right-to-left layout adaptation), enhances system-level file archiving, and adds a large number of features and UI/UX improvements.

### ✨ Features
- **Added RTL (right-to-left) support**: Full support for Arabic, Hebrew, etc., dynamically loading Bootstrap RTL styles, with comprehensive adaptation for tables, previews, dropdowns, text alignment, and more.
- **Language translations**: Updated and improved translations for 35 languages. Added detection logic to automatically match the language based on the browser's request headers, so visitors speaking different languages will automatically switch to their native language instead of being stuck with a fixed site language — fully utilizing the multilingual translations.
- **System-level archive/unarchive engine**: Removed the original PHP `ZipArchive`/`PharData` dependency and added the `FM_SystemArchiver` class. It uses `proc_open` to call the system's native `zip` and `tar` commands, greatly reducing memory usage when archiving large files.
- **`.tar.gz` compression support**: Archiving and extraction now fully support `.tar`, `.tar.gz`, and `.tgz`.
- **Site identity and filing settings**: Added a dedicated site settings page supporting custom site name, Logo, and Favicon, plus integration with mainland China ICP filing and public security network filing numbers.
- **Operation audit log**: Added `fm_write_log()`, which records all file create/read/update/delete, move, copy, archive, and upload operations to `.audit.log`.
- **Recycle bin mechanism**: Deleted files are no longer physically removed but automatically moved to the `.trash` directory with a timestamp, providing a buffer period to prevent accidental loss from mistaken deletion.
- **Strong password generator**: Added strength detection with real-time evaluation and optimization suggestions.
- **Audio and Flash media enhancements**: Hand-wrote an audio player with spectrum animation and introduced the Ruffle engine to support `.swf` playback, giving the classics a new life.
- **File List Pagination**: Added pagination support for the file list, displaying 50 records per page by default. Site administrators can easily enable or disable this feature in the settings page (`EnablePaging`). A detailed help tooltip (`PagingInfoHelp`) is also provided to ensure a good balance between performance and usability when handling massive amounts of files.

### 🚀 Improvements & Experience
- **Standardized language codes**: Fully corrected the language code naming convention (using the standard BCP 47 format). Legacy non-standard abbreviations (e.g. `gr`, `cz`) have been corrected to `el`, `cs`, and underscore formats (e.g. `pt_BR`, `mn_MN`) have been unified to hyphenated formats (`pt-BR`, `mn-MN`), greatly improving the accuracy of native browser API language detection.
- **Automatic timezone calibration**: Automatically detects the visitor's local timezone and adjusts file modification time display accordingly.
- **Date/time localization**: Supports custom date formats per language (e.g. `Y年m月d日` for Chinese, `m/d/Y` for English).
- **Seamless theme switching**: Refactored light/dark mode switching logic, supporting instant switching without refresh and remembering user preference.
- **Advanced search UI upgrade**: Search result count display and one-click clearing of search text.
- **File detail page layout optimization**: Uses `<span dir="ltr">` to perfectly solve garbled and misaligned file paths, sizes, times, and MIME types in RTL environments.
- **Floating Tooltip beautification**: Replaced native `title` with Bootstrap Tooltip and adapted to light/dark themes.

### 🔧 Bug Fixes
- **Bidi text garbling**: Fixed bidirectional text garbling when filenames contain both English and numbers in multilingual states.
- **RTL search box squeezing**: Fixed the squeezing and wrapping of the search box caused by Flex layout in RTL mode.
- **`.tar.gz` suffix truncation**: Fixed a bug where auto-renaming during upload of a same-named `.tar.gz` file incorrectly truncated the suffix.
- **Login expiry path loss**: Fixed a bug where the original access path was lost when the login expired (Session timeout). After re-login, it now automatically returns to the original path, saving users from having to find it again.

### ⚠️ Breaking Changes
- **Deprecated classes removed**: The `FM_Zipper` and `FM_Zipper_Tar` classes have been completely removed. Please ensure your server environment supports `proc_open` and has native `zip`/`tar` tools installed.
- **Config refactor**: The `theme` and `lang` fields have been completely removed from config and are now saved via browser Cookie and localStorage. Each visitor to the same site can now see their own independent language text and theme.