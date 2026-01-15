# Codr String Manipulation Library

A simple PHP library for string manipulation operations.

Last build 1.0

## Features

The `Codr\Str` class provides the following methods:

- `reverse(string $input)` - Reverse a string
- `rot13(string $input)` - Apply ROT13 transformation
- `tolower(string $input)` - Convert string to lowercase
- `toupper(string $input)` - Convert string to uppercase

## Requirements

- Docker and Docker Compose

## Installation

### Using Docker (Recommended)

1. Build the Docker container:
```bash
docker compose build
```

2. Install dependencies:
```bash
docker compose run --rm php composer install
```

## Usage

### Example Code

```php
<?php

require 'vendor/autoload.php';

use Codr\Str;

$str = new Str();

echo $str->reverse('hello');    // Output: olleh
echo $str->rot13('hello');      // Output: uryyb
echo $str->tolower('HELLO');    // Output: hello
echo $str->toupper('hello');    // Output: HELLO
```

## Running Commands with Docker

### Install Composer Dependencies
```bash
docker compose run --rm php composer install
```

### Update Composer Dependencies
```bash
docker compose run --rm php composer update
```

### Run PHPUnit Tests
```bash
docker compose run --rm php vendor/bin/phpunit
```

### Run Tests with Coverage (if xdebug is installed)
```bash
docker compose run --rm php vendor/bin/phpunit --coverage-text
```

### Run PHP Interactive Shell
```bash
docker compose run --rm php php -a
```

### Execute a PHP Script
```bash
docker compose run --rm php php your-script.php
```

### Access Container Shell
```bash
docker compose run --rm php bash
```

## Running Tests

Run the test suite using Docker:

```bash
docker compose run --rm php vendor/bin/phpunit
```

Expected output:
```
PHPUnit 9.x.x by Sebastian Bergmann and contributors.

....                                                                4 / 4 (100%)

Time: 00:00.001, Memory: 6.00 MB

OK (4 tests, 10 assertions)
```

## Development

### Without Docker (Local PHP Installation)

If you prefer to run the library without Docker:

1. Install dependencies:
```bash
composer install
```

2. Run tests:
```bash
vendor/bin/phpunit
```

## License

MIT
