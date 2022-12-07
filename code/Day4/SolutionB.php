<?php declare(strict_types = 1);

namespace Advent\Day4;

use Advent\Common;

class SolutionB extends Common {
    
    protected static $defaultName = 'solution:4:b';

    public function performSolution(array $input): int 
    {
        $solution = 0;
        foreach($input as $assigment) {
            $pair = $this->getPairFromAssigment($assigment);
            $assigmentA = $this->createPlainAssigment($pair[0]);
            $assigmentB = $this->createPlainAssigment($pair[1]);
            if($this->isAssigmentOverlap($assigmentA, $assigmentB)) {
                $solution++;
            }
        }
        return $solution;  
    }
    
    protected function getPath(): string 
    {
        return __DIR__;
    }

    private function getPairFromAssigment(string $assigment): array
    {
        return explode(",", $assigment);
    }

    private function createPlainAssigment(string $pair): string {
        
        $range = explode("-", $pair);
        return implode(",", range($range[0], $range[1])); 
    }

    private function isAssigmentOverlap(string $assigmentA, string $assigmentB): bool
    {
        echo "--" . PHP_EOL;
        echo $assigmentA . PHP_EOL;
        echo $assigmentB . PHP_EOL;
        echo "--" . PHP_EOL;
        
        /*
        if(strpos("," . $assigmentA . ",", "," . $assigmentB . ",") !== false){
            return true;
        }

        if(strpos("," . $assigmentB . ",", "," . $assigmentA . ",") !== false){
            return true;
        }
        */

        return false;
    }
}
