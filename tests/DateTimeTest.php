<?php

use Carbon\Carbon;

test('check if date is in the past', function (): void {
    expect('2020-01-01')->toBeInThePast();
});

test('check if date is in the future', function (): void {
    expect('2099-01-01')->toBeInTheFuture();
});

test('check if date is today', function (): void {
    expect(Carbon::now())->toBeToday();
});

test('check if two dates are on the same day', function (): void {
    expect('2024-07-07')->toBeSameDayAs('2024-07-07');
});

test('check if date is within last 30 days', function (): void {
    expect(Carbon::now()->subDays(15)->toDateString())->toBeWithinLastDays(30);
});

test('check if date is within next 30 days', function (): void {
    expect(Carbon::now()->addDays(15)->toDateString())->toBeWithinNextDays(30);
});

test('check if date is on a weekend', function (): void {
    expect('2024-07-06')->toBeOnWeekend();
});

test('check if date is on a weekday', function (): void {
    expect('2024-07-05')->toBeOnWeekday();
});

test('check if date is between two dates', function (): void {
    expect('2024-07-07')->toBeBetweenDates('2024-07-01', '2024-07-10');
});
