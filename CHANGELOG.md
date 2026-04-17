# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

## [1.0.8] - 2026-04-17

### Fixed
- `EnsureConfigExportedObserver` now persists the exported configuration to the filesystem via `saveConfig()`; previously it only built the config array in memory, so `var/error_reporting_config.json` was never created and every request kept logging "Error reporting configuration file missing, attempting to export..." followed by "automatically exported after detection of missing file"

## [1.0.7] - 2026-01-27

### Fixed
- ThrowableWrapperException now includes original file and line number in the exception message for better error visibility
- Previously, wrapped exceptions would lose the original error location in Magento's error display

## [1.0.6] - Previous Release

### Added
- Initial ThrowableWrapperException implementation
- Converts Throwable to Exception for Magento's Bootstrap::run() compatibility
- Preserves original file, line, and trace via reflection
