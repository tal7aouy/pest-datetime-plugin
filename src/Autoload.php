<?php

declare(strict_types=1);

use Pest\Expectation as PestExpectation;
use Tal7aouy\PestDateTime\Expectation;

$expectations = get_class_methods(Expectation::class);
$expectations = array_filter($expectations, fn ($fun): bool => str_starts_with($fun, 'toBe'));

foreach ($expectations as $expectation) {
    expect()->extend(
        $expectation,
        function () use ($expectation): PestExpectation {
            if (is_callable($callback = [new Expectation($this->value), $expectation])) {
                call_user_func($callback, ...func_get_args());
            }

            return $this;
        }
    );
}
