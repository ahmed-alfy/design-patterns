# Design Patterns in PHP

This project provides code examples for various design patterns implemented in PHP. It demonstrates creational, structural, and behavioral patterns with practical examples.

## Prerequisites

Before you begin, ensure you have the following installed on your system:

- **PHP**: Version 8.2 or higher (this project was tested with PHP 8.2.29)
- **Composer**: For dependency management

## Cloning the Repository

To clone this repository from GitHub, run the following command in your terminal:

```bash
git clone https://github.com/ahmed-alfy/design-patterns.git
```

Navigate to the project directory:

```bash
cd design-patterns
```

## Installing Dependencies

Install the project dependencies using Composer:

```bash
composer install
```

This will install PHPUnit and other required packages.

## Running Tests

To run the test suite, use the following command:

```bash
./vendor/bin/phpunit tests/
```

Or alternatively:

```bash
vendor/bin/phpunit tests/
```

The tests cover various design patterns implemented in the project. You should see output indicating the number of tests run and their status (e.g., "OK (29 tests, 57 assertions)").

## Using PsySH (Laravel Tinker)

This project includes the Laravel Tinker package, which provides an interactive REPL (Read-Eval-Print Loop) powered by PsySH. This allows you to experiment with the design pattern classes interactively.

To start the PsySH shell:

```bash
./vendor/bin/psysh
```

Once in the PsySH shell, you can instantiate classes, call methods, and test design patterns in real-time. For example:

```php
// Create an Abstract Factory
$factory = new \Creational\AbstractFactory\CarAbstractFactory(1000);

// Create a BMW car
$bmw = $factory->createBmwCar();
$bmw->calculatePrice(); // Outputs: 1000 + 2000 => 3000
```

Use `exit` or `Ctrl+D` to quit the PsySH session.

## Project Structure

- `src/`: Contains the source code for design pattern implementations
  - `Creational/`: Creational design patterns (e.g., Abstract Factory, Builder, Factory Method, etc.)
  - `Structural/`: Structural design patterns (e.g., Adapter, Bridge, Composite, etc.)
- `tests/`: Contains PHPUnit test files for each design pattern
- `packages/`: Local Composer packages used in some examples
- `composer.json`: Composer configuration file
- `composer.lock`: Composer lock file for dependency versions

## What You Need to Know

- This project uses PSR-4 autoloading for namespaces
- Tests are written using PHPUnit
- Some examples use local Composer packages defined in the `packages/` directory
- The project demonstrates both basic implementations and more advanced usage of design patterns
