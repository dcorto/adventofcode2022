<?php declare(strict_types=1);

namespace Test\Day2;

use PHPUnit\Framework\TestCase;
use Advent\Day2;

final class SolutionBTest extends TestCase
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
        
    }

    protected function loadInput($filename): array {
        $lines = [];
        $fp = fopen($filename, "r") or die ('Unable to open file ' . $filename);

        while(!feof($fp)) {
            $lines[] = fgets($fp);
        }

        return $lines;
    }
}