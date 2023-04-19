<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

/*
 * Создайте функцию, которая принимает целое число в качестве аргумента и возвращает значение
 * "Even"для четных или "Odd"нечетных чисел.
 * */

function even_or_odd(int $n): string {
    return $n % 2 == 0 ? "Even" : "Odd";
}

class EvenOrOddTest extends TestCase {
    public function testExamples() {
        $this->assertSame("Even", even_or_odd(2));
        $this->assertSame("Even", even_or_odd(0));
        $this->assertSame("Odd", even_or_odd(7));
        $this->assertSame("Odd", even_or_odd(1));
        $this->assertSame("Odd", even_or_odd(-1));
    }
}
