# 📅 PestDateTime Plugin

PestDateTime is a plugin for Pest PHP testing framework that provides intuitive date and time assertions using Carbon.

[![Tests](https://github.com/tal7aouy/pest-datetime-plugin/actions/workflows/tests.yml/badge.svg)](https://github.com/tal7aouy/pest-datetime-plugin/actions/workflows/tests.yml) ![Packagist Version](https://img.shields.io/packagist/v/tal7aouy/pest-datetime-plugin) ![Packagist License](https://img.shields.io/packagist/l/tal7aouy/pest-datetime-plugin)

## Installation

Install via Composer:

```bash
composer require tal7aouy/pest-datetime-plugin
```

## Usage

### Example: Checking if Date is Today

```php
use Carbon\Carbon;

test('Check if date is today', function (): void {
    expect(Carbon::now())->toBeToday();
});
```

### Available Assertions

- **toBeToday()**: Asserts that the date matches today's date.
- **toBeInThePast()**: Asserts that the date is in the past.
- **toBeInTheFuture()**: Asserts that the date is in the future.
- **toBeSameDayAs($date)**: Asserts that the date is the same day as the given `$date`.
- **toBeWithinLastDays($days)**: Asserts that the date is within the last `$days`.
- **toBeWithinNextDays($days)**: Asserts that the date is within the next `$days`.
- **toBeOnWeekend()**: Asserts that the date falls on a weekend.
- **toBeOnWeekday()**: Asserts that the date falls on a weekday.
- **toBeBetweenDates($startDate, $endDate)**: Asserts that the date falls between `$startDate` and `$endDate`.

## Contributing

Contributions and feedback are welcome! Please feel free to open issues or submit pull requests.

## License

This project is licensed under the MIT License.
