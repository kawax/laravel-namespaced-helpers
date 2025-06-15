# Copilot Onboarding Guide

Welcome to the `invokable/laravel-namespaced-helpers` repository!  
This guide will help Copilot understand the project's intent, conventions, and how to provide optimal suggestions.

---

## Overview

**Purpose:**  
This package provides namespaced helper functions for Laravel, such as a non-global `env()` and the reintroduced `dispatch_now()` (removed in Laravel 10+).  
It helps avoid global `env()` conflicts and restores convenient job dispatching patterns for Laravel 11+.

**Main Features:**
- `env()` function: Namespaced to avoid global pollution.
- `dispatch_now()` function: Allows synchronous dispatching of jobs.
- `DispatchNow` trait: Adds `dispatchNow()` static method to jobs.

**Requirements:**
- PHP >= 8.2
- Laravel >= 11.0

---

## Installation & Uninstallation

```shell
composer require revolution/laravel-namespaced-helpers
composer remove revolution/laravel-namespaced-helpers
```

---

## Usage Patterns

### Namespaced env()

- Use in config files:
    ```php
    use function Revolution\Illuminate\Support\env;

    return [
        'name' => env('APP_NAME', 'Laravel'),
    ];
    ```
- **Note:** Do not use the global `env()` in production code; always import via namespace.

### dispatch_now()

- Use when you need to synchronously dispatch a job and retrieve its return value:
    ```php
    use function Revolution\Illuminate\Support\dispatch_now;

    $result = dispatch_now(new MyJob());
    ```
- For job classes, add the `DispatchNow` trait:
    ```php
    use Revolution\Illuminate\Support\DispatchNow;

    class MyJob implements ShouldQueue
    {
        use DispatchNow;
    }

    // Usage
    $result = MyJob::dispatchNow();
    ```

---

## Design and Code Style

- **Follow PSR-12** coding standards.
- **Favor functional style** for helpers; keep them stateless and pure if possible.
- **Type hint all function arguments and return values** (PHP 8+ features).
- **Tests:** Use Orchestra Testbench for package testing, and Mockery for dependencies.
- **Do not introduce global helpers**—always use the `Revolution\Illuminate\Support\` namespace.
- **Minimize dependencies:** Keep the package lightweight and Laravel-version compatible.

---

## Directory Structure

- `src/` — Package source code
- `tests/` — PHPUnit tests (Orchestra Testbench)
- `.github/` — GitHub workflows and this onboarding file

---

## Testing

- All helpers and traits should be covered by tests in `tests/`.
- When adding new helpers, always provide corresponding tests.
- Use PHPUnit assertions and Mockery for interface mocking.

---

## Best Practices for Copilot

- **When suggesting new helpers:** Always namespace under `Revolution\Illuminate\Support`.
- **When suggesting usage examples:** Always include the `use function ...` or `use ...` statement.
- **When updating or adding tests:** Follow the structure and mocking patterns found in `tests/HelpersTest.php` and `tests/TraitsTest.php`.
- **When suggesting CI changes:** Only update files in `.github/workflows`.

---

## What NOT to Do

- Do **not** add global functions or traits outside the intended namespace.
- Do **not** suggest features requiring Laravel versions below 11 or PHP below 8.2.
- Do **not** introduce additional dependencies unless absolutely necessary.
- Do **not** generate files outside `src/`, `tests/`, or `.github/` directories.

---

## Contact

For questions or contributions, please open a GitHub Issue or Pull Request.

---

Thank you for helping make this package robust and developer-friendly!