<?php declare(strict_types=1);

namespace Test\Day3;

use Test\BaseTest;
use Advent\Day3;

final class SolutionBTest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day3\SolutionB();        
        $this->assertInstanceOf(
            Day3\SolutionB::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 70;
        $sut = new Day3\SolutionB();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}