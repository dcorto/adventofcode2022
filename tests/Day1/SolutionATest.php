<?php declare(strict_types=1);

namespace Test\Day1;

use Test\BaseTest;
use Advent\Day1;

final class SolutionATest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day1\SolutionA();        
        $this->assertInstanceOf(
            Day1\SolutionA::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 24000;
        $sut = new Day1\SolutionA();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}