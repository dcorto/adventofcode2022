<?php declare(strict_types=1);

namespace Test\Day4;

use Test\BaseTest;
use Advent\Day4;

final class SolutionATest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day4\SolutionA();        
        $this->assertInstanceOf(
            Day4\SolutionA::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 0;
        $sut = new Day4\SolutionA();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }    
}