<?php declare(strict_types = 1);

namespace Advent\Day1;

use Advent\Common;

class SolutionB extends Common {

    private const EMPTY = PHP_EOL;
    private const TOP_NUMBER = 3;

    protected static $defaultName = 'solution:1:b';

    public function performSolution(array $input): int 
    {
        $calories = [];
        $i = 0;
        foreach ($input as $line) {    
            if ($line != SolutionB::EMPTY) {
                
                if(!isset($calories[$i])) {
                    $calories[$i] = 0;
                }

                $calories[$i] = $calories[$i] + (int) $line;        
            }
            else {
                $i++;
            }
        }

        return $this->getTop($calories, SolutionB::TOP_NUMBER);            
    }

    private function getTop(array $calories, int $number): int
    {
        $sum = 0;
        if($number < 1) {
            return $sum;
        }


        for($i = 1; $i <= $number; $i++) {
            $current = max($calories);                    
            $key = array_search($current, $calories);
            unset($calories[$key]);
            $sum = $sum + $current;
        }

        return $sum;
    }

    protected function getPath(): string 
    {
        return __DIR__;
    }
}
