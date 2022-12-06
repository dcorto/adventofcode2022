<?php declare(strict_types=1);

namespace Test\Day2;

use Test\BaseTest;
use Advent\Day2;

final class SolutionATest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day2\SolutionA();        
        $this->assertInstanceOf(
            Day2\SolutionA::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 15;
        $sut = new Day2\SolutionA();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}