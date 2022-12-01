<?php declare(strict_types = 1);

namespace Advent\Day1;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Advent\Common;

class SolutionA extends Common {

    private const EMPTY = PHP_EOL;

    protected static $defaultName = 'solution:1:a';

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $input = $this->loadInput(__DIR__."/input.txt");
        
        $calories = [];

        //print_r($input);

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

        $solution = max($calories);
        
        $this->printSolution((string) $solution);
        return Command::SUCCESS;
    }
}
