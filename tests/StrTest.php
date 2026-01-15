<?php

namespace Codr\Tests;

use Codr\Str;
use PHPUnit\Framework\TestCase;

class StrTest extends TestCase
{
    private $string;

    protected function setUp(): void
    {
        $this->string = new Str();
    }

    public function testReverse()
    {
        $this->assertEquals('olleh', $this->string->reverse('hello'));
        $this->assertEquals('dlrow', $this->string->reverse('world'));
        $this->assertEquals('', $this->string->reverse(''));
    }

    public function testRot13()
    {
        $this->assertEquals('uryyb', $this->string->rot13('hello'));
        $this->assertEquals('hello', $this->string->rot13('uryyb'));
        $this->assertEquals('Grfg', $this->string->rot13('Test'));
    }

    public function testTolower()
    {
        $this->assertEquals('hello', $this->string->tolower('HELLO'));
        $this->assertEquals('world', $this->string->tolower('WoRlD'));
        $this->assertEquals('test', $this->string->tolower('test'));
    }

    public function testToupper()
    {
        $this->assertEquals('HELLO', $this->string->toupper('hello'));
        $this->assertEquals('WORLD', $this->string->toupper('WoRlD'));
        $this->assertEquals('TEST', $this->string->toupper('TEST'));
    }
}
