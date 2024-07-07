<?php

declare(strict_types=1);

namespace Tal7aouy\PestDateTime;

use Carbon\Carbon;
use Pest\Expectation as PestExpectation;

/**
 * @internal
 *
 * @template TValue
 */
final class Expectation
{
    private Carbon|string $date;

    public function __construct(string|Carbon $date)
    {
        $this->date = $date instanceof Carbon ? $date : Carbon::parse($date);
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeInThePast(): PestExpectation
    {
        return expect($this->date->isPast())->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeInTheFuture(): PestExpectation
    {
        return expect($this->date->isFuture())->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeToday(): PestExpectation
    {
        return expect($this->date->isToday())->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeSameDayAs(string $date): PestExpectation
    {
        return expect($this->date->isSameDay(Carbon::parse($date)))->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeWithinLastDays(int $days): PestExpectation
    {
        return expect($this->date->greaterThanOrEqualTo(Carbon::now()->subDays($days)))->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeWithinNextDays(int $days): PestExpectation
    {
        return expect($this->date->LessThanOrEqualTo(Carbon::now()->addDays($days)))->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeOnWeekend(): PestExpectation
    {
        return expect($this->date->isWeekend())->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeOnWeekday(): PestExpectation
    {
        return expect($this->date->isWeekday())->toBeTrue();
    }

    /**
     * @return PestExpectation<TValue>
     */
    public function toBeBetweenDates(string $startDate, string $endDate): PestExpectation
    {
        return expect($this->date->between(Carbon::parse($startDate), Carbon::parse($endDate)))->toBeTrue();
    }
}
