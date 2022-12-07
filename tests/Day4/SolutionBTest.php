<?php declare(strict_types=1);

namespace Test\Day4;

use Test\BaseTest;
use Advent\Day4;

final class SolutionBTest extends BaseTest
{
    public function testInstance(): void
    {
        $sut = new Day4\SolutionB();        
        $this->assertInstanceOf(
            Day4\SolutionB::class,
            $sut
        );
    }

    public function testSolution(): void
    {
        $expected = 4;
        $sut = new Day4\SolutionB();    
        $input = $this->loadInput(__DIR__."/input.txt");
        $actual = $sut->performSolution($input);
        $this->assertEquals($expected, $actual);
    }
}