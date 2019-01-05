# zephir-vs-php-performance

Zephir vs. PHP performance benchmark using a recursive fibonacci.

## Tested environment

- macOS High Sierra 10.13.6

- PHP 7.2.10 (via phpenv)

- [Zephir](https://github.com/phalcon/zephir) 0.11.8

- [Zephir Parser](https://github.com/phalcon/php-zephir-parser) 1.1.3

## Usage

Clone this repository:

```
$ cd ~/your/workspace
$ git clone git@github.com:ngmy/zephir-vs-php-performance.git
```

Build Zephir code and generate the PHP extension:

```
$ cd ~/your/workspace/zephir-vs-php-performance/zephir/src/myzephir
$ make build
```

Add the generated PHP extension to your `php.ini`:

```
[My Zephir]
extension=myzephir.so
```

Install the Zephir benchmark project:

```
$ cd ~/your/workspace/zephir-vs-php-performance/zephir
$ composer install
```

Install the PHP benchmark project:

```
$ cd ~/your/workspace/zephir-vs-php-performance/php
$ composer install
```

Run the Zephir benchmark program:

```
$ cd ~/your/workspace/zephir-vs-php-performance
$ php zephir/benchmark.php
```

Run the PHP benchmark program:

```
$ cd ~/your/workspace/zephir-vs-php-performance
$ php php/benchmark.php
```
