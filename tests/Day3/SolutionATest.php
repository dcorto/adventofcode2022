<?php declare(strict_types=1);

namespace Test\Day3;

use Test\BaseTest;
use Advent\Day3;

final class SolutionATest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day3\SolutionA();        
        $this->assertInstanceOf(
            Day3\SolutionA::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 157;
        $sut = new Day3\SolutionA();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}