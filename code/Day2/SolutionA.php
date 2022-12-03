<?php declare(strict_types = 1);

namespace Advent\Day2;

use Advent\Common;

class SolutionA extends Common {

    private const ROCK_PLAY = [
        'movements' => ['A','X'],
        'score' => 1,
    ];

    private const PAPER_PLAY = [
        'movements' => ['B','Y'],
        'score' => 2,
    ];

    private const SCISSORS_PLAY = [
        'movements' => ['C','Z'],
        'score' => 3,
    ];

    private const WIN = 6;
    private const DRAWN = 3;
    private const LOOSE = 0;

    protected static $defaultName = 'solution:2:a';

    public function performSolution(array $input): int 
    {
        $solution = 0;

        foreach($input as $line) {

            $playInput = $this->parseInputLine($line);

            $opponentMovement = trim($playInput[0]);
            $choose = trim($playInput[1]);

            $scoreChoosed = $this->getChoosedScore($choose);
            $scorePlay = $this->getPlayScore($opponentMovement, $choose);
            
            $solution = $solution + ($scoreChoosed+$scorePlay);
        }


        return $solution;  
    }

    protected function getPath(): string 
    {
        return __DIR__;
    }

    private function parseInputLine(string $line): array
    {
        return explode(" ", $line);
    }
    
    private function getChoosedScore(string $play): int
    {
        if (in_array($play, SolutionA::ROCK_PLAY['movements'])) {
            return SolutionA::ROCK_PLAY['score'];
        }

        if (in_array($play, SolutionA::PAPER_PLAY['movements'])) {
            return SolutionA::PAPER_PLAY['score'];
        }

        if (in_array($play, SolutionA::SCISSORS_PLAY['movements'])) {
            return SolutionA::SCISSORS_PLAY['score'];
        }

        throw new \Exception("not valid movement choosed");
    }

    private function getPlayScore(string $opponentMovement, string $choose): int
    {
        
        if ($opponentMovement === 'A') {
            if($choose === 'X') {
                return SolutionA::DRAWN;
            }

            if($choose === 'Z') {
                return SolutionA::LOOSE;
            }

            return SolutionA::WIN;
        }

        if ($opponentMovement === 'B') {
            if($choose === 'Y') {
                return SolutionA::DRAWN;
            }

            if($choose === 'X') {
                return SolutionA::LOOSE;
            }

            return SolutionA::WIN;
        }

        if ($opponentMovement === 'C') {
            if($choose === 'Z') {
                return SolutionA::DRAWN;
            }    

            if($choose === 'Y') {
                return SolutionA::LOOSE;
            }

            return SolutionA::WIN;
        }

        throw new \Exception("not valid movement play");
    }
}
