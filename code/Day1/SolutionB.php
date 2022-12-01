<?php declare(strict_types = 1);

namespace Advent\Day1;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionB extends Common {

    private const EMPTY = PHP_EOL;
    private const TOP_NUMBER = 3;

    protected static $defaultName = 'solution:1:b';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = $this->loadInput(__DIR__."/input.txt");
        
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

        $solution = $this->getTop($calories, SolutionB::TOP_NUMBER);
        
        $this->printSolution((string) $solution);

        return Command::SUCCESS;
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
}
