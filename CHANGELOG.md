# 📝 Changelog

## [2.6.1] - 2026-11-05

This version primarily upgraded dependency libraries, comprehensively refactored the frontend visual system based on 2.6.0, added Markdown file rendering and viewing support, and significantly improved the security and stability of uploads and downloads.

### 🎨 Visual & UI/UX Upgrades
- **Icon library fully upgraded to FontAwesome 7**: Replaced all legacy `FontAwesome 4` icons (such as the `-o` suffixes) across the site with the latest `FontAwesome 7` versions.
- **Colored and centered action bar icons**: Added distinct background colors and hover feedback for file list action icons (delete, rename, copy, direct link, download). Achieved absolute centering of icons within square backgrounds using Flex layout — a blessing for perfectionists.
- **Custom SVG icons**: Since the new `FontAwesome 7` icon designs are overly minimalist, the original "link" and "language" icons became visually unacceptable. To maintain consistency with the system's original style, manually redrew and added SVG code for these two icons, encapsulated as the public functions `fm_link_icon()` and `fa_language()`.
- **Extreme CSS slimming**: Removed hundreds of lines of redundant and conflicting CSS code, merged dark mode logic, making page loading lighter and rendering faster.

### ✨ New Features
- **Full Markdown rendering engine**: Introduced `marked.js` to support complete Markdown syntax parsing. Added a "one-click copy" button for code blocks in `.md` documents (with multilingual status feedback).
- **Major Ace Editor upgrade**: Upgraded the editor from `1.32.2` to `v1.45.2`, supporting the latest language modes and themes, and resolved 404 errors caused by missing theme files.
- **Direct link anti-garbled output (`?raw=`)**: Added a `?raw=` route that directly outputs the correct `Content-Type` and `charset=utf-8` for plain text files such as `.md`, `.json`, `.sh`, and `.css`, resolving the multilingual garbled text issue when viewing file contents via "Direct Link".
- **Customizable footer start year**: Added a year setting in the admin "Site Identity & Filing" page, supporting display as `© 2017` or showing only the current year (enter `none`).

### 🚀 Optimizations & Security
- **Markdown XSS defense**: Added the `fm_is_safe_markdown()` function. During file upload (including the final step of chunked merging), it automatically strips code blocks and inline code, then checks for `<script>` or `<?php` to prevent malicious script injection.
- **URL upload refactoring**:
  - Fixed the issue where URLs with query parameters (such as `?token=123`) could not obtain the correct filename.
  - Fixed the critical bug where uploaded files were saved with `600` permissions, causing image files to be inaccessible when loaded (now automatically applies `chmod 0644`).
  - Added User-Agent spoofing and a 120-second timeout to prevent hotlink protection blocking or interruption of large file downloads.
- **Advanced search leak prevention**: Rewrote the `scan()` function, added `realpath` boundary validation, `preg_quote` regex escaping, and used iterators to intercept sensitive hidden files such as `.trash` at the traversal layer, preventing audit logs from being exposed through advanced search.
- **Dropzone drag-and-drop upload optimization**: Downgraded/locked `Dropzone` to the stable version 5.9.3, resolving modular errors introduced in 6.x; multilingual prompts are fully covered.
- **SFW (Flash) player adaptation**: Used the `Ruffle` engine to render `.swf` files, refactored the player container, and enforced a maximum height (`60vh`) to resolve Flash content overflow issues on both mobile and PC.

### 🐛 Bug Fixes
- **Permission-related save failures**: Resolved the issue where saves failed due to a mismatch between the `Nginx/PHP-FPM` runtime user (such as `www` / `www-data`) and the file owner (`root`) on `Linux` servers.

### ⚠️ Breaking Changes
- **Legacy icon class names removed**: The original `FontAwesome 4` class names have been fully deprecated; for further development, please refer to the corresponding `FA7` names.
- **Enforced upload extension validation**: If `$allowed_upload_extensions` is not configured, URL uploads will now be rejected with an error instead of allowing all formats by default.

## [2.6.0] - 2026-10-31

This is a milestone update. This release features a complete overhaul of multilingual support (including RTL right-to-left layout adaptation), enhanced system-level archiving capabilities, and numerous new features along with UI/UX improvements.

### ✨ Features
- **Added RTL (Right-to-Left) direction support**: Full support for Arabic, Hebrew, etc. Dynamically loads Bootstrap RTL styles, with comprehensive adaptations for tables, previews, dropdown menus, and text alignment.
- **Language Translations**: Updated and refined translations for 35 languages. Added auto-detection logic based on browser headers; visitors with different languages will automatically switch to their native language, no longer confused by a fixed site language. Fully leverages the multilingual translation system.
- **System-level Archiving/Extraction Engine**: Removed the dependency on PHP's `ZipArchive`/`PharData`. Added the `FM_SystemArchiver` class, which uses `proc_open` to call native system `zip` and `tar` commands, significantly reducing memory usage when archiving large files.
- **Support for `.tar.gz` format**: Full compatibility for packing and unpacking `.tar`, `.tar.gz`, and `.tgz`.
- **Site Identity & Filings Settings**: Added an independent site settings page. Supports custom site title, Logo, and Favicon, and integrates Chinese mainland ICP and Public Security registration numbers.
- **Operation Audit Log**: Added `fm_write_log()`. All file operations (CRUD, move, copy, archive, upload) are now recorded in `.audit.log`.
- **Recycle Bin Mechanism**: Deleting files no longer performs a direct physical deletion. Instead, they are automatically moved to the `.trash` directory with a timestamp. This provides a buffer period for file deletion, preventing unnecessary loss from accidental deletions.
- **Strong Password Generator**: Added strength evaluation to assess passwords in real-time and provide optimization suggestions.
- **Audio & Flash Media Enhancements**: Hand-crafted an audio player with spectrum animation and integrated the Ruffle engine to support `.swf` playback, giving classic media a new life.

### 🚀 Improvements
- **Standardized Language Codes**: Fixed language code naming conventions to comply with the standard BCP 47 format. Non-standard abbreviations (e.g., `gr`, `cz`) were corrected to `el`, `cs`, and underscore formats (e.g., `pt_BR`, `mn_MN`) were unified to hyphenated formats (`pt-BR`, `mn-MN`). This significantly improves recognition accuracy by native browser APIs in multilingual environments.
- **Automatic Timezone Calibration**: Automatically detects the visitor's local timezone and adjusts file modification times accordingly.
- **Localized Date/Time**: Dynamically adapts date formats to match regional conventions (e.g., Year-Month-Day for Chinese, Month/Day/Year for English).
- **Seamless Theme Switching**: Refactored the light/dark mode switching logic. Supports instant switching without a page refresh and remembers user preferences.
- **Advanced Search UI Upgrade**: Includes search result statistics and a one-click clear button.
- **File Details Page Layout Optimization**: Utilized `<span dir="ltr">` to perfectly resolve garbled text and misalignment issues for file paths, sizes, times, and MIME types in RTL environments.
- **Floating Tooltip Beautification**: Replaced native `title` attributes with Bootstrap Tooltips and adapted them for light/dark themes.

### 🐛 Bug Fixes
- **Bidi Text Scrambling**: Fixed bidirectional text scrambling issues when filenames contain both English and numbers under multilingual states.
- **RTL Search Box Crushing**: Fixed search box crushing and line wrapping issues caused by Flex layout in RTL mode.
- **`.tar.gz` Extension Truncation**: Fixed a bug where the extension was incorrectly truncated during auto-renaming when uploading a `.tar.gz` file with the same name.
- **Login Expiry Path Loss**: Fixed a bug where the original access path was lost due to login expiry (Session expiration). The system now automatically redirects back to the original path after re-login, saving users from having to find the directory again.

### ⚠️ Breaking Changes
- **Removed Deprecated Classes**: Completely removed the `FM_Zipper` and `FM_Zipper_Tar` classes. Please ensure your server environment supports `proc_open` and has native `zip`/`tar` tools installed.
- **Config File Refactor**: Completely removed the `theme` and `lang` fields from the config. These are now saved via browser Cookies and localStorage. Now, each visitor to the same site can view their own independent language text and theme.