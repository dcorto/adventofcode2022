<?php declare(strict_types = 1);

namespace Advent\Day1;

use Advent\Common;

class SolutionA extends Common {

    private const EMPTY = PHP_EOL;

    protected static $defaultName = 'solution:1:a';

    public function performSolution(array $input): int 
    {
        $calories = [];

        $i = 0;
        foreach ($input as $line) {    
            if ($line != SolutionA::EMPTY) {
                
                if(!isset($calories[$i])) {
                    $calories[$i] = 0;
                }

                $calories[$i] = $calories[$i] + (int) $line;        
            }
            else {
                $i++;
            }
        }

        return max($calories);        
    }
}
