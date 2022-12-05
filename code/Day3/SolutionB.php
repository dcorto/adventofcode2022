<?php declare(strict_types = 1);

namespace Advent\Day3;

use Advent\Common;

class SolutionB extends Common {

    protected static $defaultName = 'solution:3:b';

    private array $alphabet;

    public function __construct() 
    {
        $this->alphabet = array_merge(range('a', 'z'), range('A', 'Z'));
        parent::__construct();
    }

    public function performSolution(array $input): int 
    {
        $solution = 0;
        
        $groups = [];
        $y = 0;
        for($i=0; $i < count($input); $i++) {
            if($i % 3 === 0 && $i != 0){
                $y++;
            }
            $groups[$y][] = $input[$i];            
        }

        //print_r($groups); die();
        
        foreach($groups as $group) {
            $badge = $this->searchBadge($group);
            $solution = $solution + $this->getItemPriority($badge);
        }
        
        return $solution;
    }

    protected function getPath(): string 
    {
        return __DIR__;
    }

    private function searchBadge(array $group): string
    {
        $groupArray = [];
        for($i=0; $i<count($group); $i++){
            $groupArray[$i] = str_split($group[$i]);
        }
        
        $common = array_intersect(...$groupArray);
        
        return array_pop($common);

        throw new \Exception("no common item found in group: '" . implode(',', $group) . "'");
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