<?php declare(strict_types=1);

namespace Test\Day2;

use Test\BaseTest;
use Advent\Day2;

final class SolutionBTest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day2\SolutionB();        
        $this->assertInstanceOf(
            Day2\SolutionB::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 12;
        $sut = new Day2\SolutionB();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}