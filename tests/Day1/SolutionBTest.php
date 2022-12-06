<?php declare(strict_types=1);

namespace Test\Day1;

use Test\BaseTest;
use Advent\Day1;

final class SolutionBTest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day1\SolutionB();        
        $this->assertInstanceOf(
            Day1\SolutionB::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 45000;
        $sut = new Day1\SolutionB();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}