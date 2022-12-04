<?php declare(strict_types = 1);

namespace Advent\Day3;

use Advent\Common;

class SolutionA extends Common {

    private $alphabet;

    public function __construct() 
    {
        $this->alphabet = array_merge(range('a', 'z'), range('A', 'Z'));
        parent::__construct();
    }
    
    protected static $defaultName = 'solution:3:a';

    public function performSolution(array $input): int 
    {
        $solution = 0;

        $solution = $this->getItemPriority('Z');

        return $solution;  
    }

    protected function getPath(): string 
    {
        return __DIR__;
    }

    private function splitRucksack(string $rucksack): array
    {
        
    }

    private function getItemPriority(string $item): int
    {
        //from a item use alphabet for calc the prio
        $alphabet = $this->getAlphabet();
        $priority = array_search($item, $alphabet, true);
        if ($priority === false ) {
            throw new \Exception("the item '" . $item . "' was not found for priority");
        }
        return $priority + 1;
    }
    
    private function getAlphabet(): array
    {
        return $this->alphabet;        
    }
}
