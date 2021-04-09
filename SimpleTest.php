<?php
// Path to run ./vendor/bin/phpunit --bootstrap vendor/autoload.php SimpleTest.php

use PHPUnit\Framework\TestCase;

require_once __DIR__.'/app/EngineWords.php';

use Engine\EngineWords;

class SimpleTest extends TestCase 
{
    protected static $testCase = 'a (b c (d e (f) g) h) i (j k)';

    protected static $expected = [
        'start' => 2,
        'end' => 20,
    ];

    public function testGetLastIndex() 
    {
        $res = EngineWords::getEndIndex(static::$testCase, static::$expected['start']);
        $this->assertEquals(static::$expected['end'], $res); 
    }
}