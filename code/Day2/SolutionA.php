<?php declare(strict_types = 1);

namespace Advent\Day2;

use Advent\Common;

class SolutionA extends Common {

    private const ROCK_PLAY = [
        'label' => 'A',
        'score' => 1,
    ];

    private const ROCK_RESPONSE = [
        'label' => 'A',
        'score' => -8,
    ];

    private const ROCK_PLAY = [
        'label' => 'A',
        'score' => 1,
    ];

    private const ROCK_RESPONSE = [
        'label' => 'A',
        'score' => -8,
    ];

    private const ROCK_PLAY = [
        'label' => 'A',
        'score' => 1,
    ];

    private const ROCK_RESPONSE = [
        'label' => 'A',
        'score' => -8,
    ];

    protected static $defaultName = 'solution:2:a';


    public function performSolution(array $input): int 
    {
        $solution = 0;

        $lol = $this->getScore('A');
        echo $lol;



        return $solution;  
    }

    protected function getPath(): string 
    {
        return __DIR__;
    }
    
    private function getScore(string $input): int
    {
        if ($input === SolutionA::ROCK_PLAY['label']) {
            return SolutionA::ROCK_PLAY['score'];
        }

        if ($input === SolutionA::ROCK_PLAY['label']) {
            return SolutionA::ROCK_PLAY['score'];
        }

        return 0;
    }
}
