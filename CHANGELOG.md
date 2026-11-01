# 📝 Changelog

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