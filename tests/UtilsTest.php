<?php

namespace Php\Package\Tests;

use PHPUnit\Framework\TestCase;

use function  Php\Package\Utils\reverseString;
use function  Php\Package\Utils\without;
use function  Php\Package\Utils\gt;

// Класс UtilsTest наследует класс TestCase
// Имя класса совпадает с именем файла
class UtilsTest extends TestCase
{
    // Метод (функция), определенный внутри класса,
    // Должен начинаться со слова test
    // Ключевое слово public нужно, чтобы PHPUnit мог вызвать этот тест снаружи
    public function testReverse(): void
    {
        // Сначала идет ожидаемое значение (expected)
        // И только потом актуальное (actual)
        $this->assertEquals('', reverseString(''));
        $this->assertEquals('olleh', reverseString('hello'));
    }

    public function testWithout(): void
    {
        $this->assertEquals([], without([], [1, 2, 3, 4, 5]));
        $this->assertEquals([1, 2, 3, 4, 5], without([1, 2, 3, 4, 5], []));
        $this->assertEquals([1, 2, 3], without([1, 2, 3, 4, 5], [4, 5]));
        $this->assertEquals([1, 1], without([1, 2, 2, 1], [2]));
        $this->assertEquals([], without([2, 2, 2, 2], [2]));
    }

    public function testGt(): void
    {
        $this->assertTrue(gt(3, 1));
        $this->assertFalse(gt(3, 3));
        $this->assertFalse(gt(1, 3));
    }
}
