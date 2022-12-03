<?php declare(strict_types = 1);

namespace Advent\Day2;

use Advent\Common;

class SolutionB extends Common {

    private const TARGET_LOOSE = 'X';
    private const TARGET_DRAW = 'Y';
    private const TARGET_WIN = 'Z';
    
    private const WIN = 6;
    private const DRAWN = 3;
    private const LOOSE = 0;

    private const ROCK = 'A';
    private const PAPER = 'B';
    private const SCISSORS = 'C';

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


    protected static $defaultName = 'solution:2:b';

    public function performSolution(array $input): int 
    {
        $solution = 0;

            
        //foreach($input as $line) {
            $line = "A Y";
            $playInput = $this->parseInputLine($line);

            $opponentMovement = trim($playInput[0]);
            $target = trim($playInput[1]);

            $scoreTarget = $this->getTargetScore($target);
            $neededMove = $this->getNeededMove($opponentMovement, $target);
            $scoreMove = $this->getMoveScore($neededMove);    

            $solution = $solution + ($scoreTarget+$scoreMove);
        //}      

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

    private function getNeededMove($opponentMovement, $target): string
    {
        if ($target === SolutionB::TARGET_DRAW) {
            return $opponentMovement;
        }

        if($opponentMovement === SolutionB::ROCK) {
            if ($target === SolutionB::TARGET_WIN) {
                return SolutionB::PAPER;
            } 
            return SolutionB::SCISSORS;             
        }

        if($opponentMovement === SolutionB::PAPER) {
            if ($target === SolutionB::TARGET_WIN) {
                return SolutionB::SCISSORS;
            } 
            return SolutionB::ROCK;             
        }

        if($opponentMovement === SolutionB::SCISSORS) {
            if ($target === SolutionB::TARGET_WIN) {
                return SolutionB::ROCK;
            } 
            return SolutionB::PAPER;             
        }

    }

    private function getTargetScore($target): int 
    {
        if(SolutionB::TARGET_LOOSE) {
            return SolutionB::LOOSE;
        }
        if(SolutionB::TARGET_WIN) {
            return SolutionB::WIN;
        }
        if(SolutionB::TARGET_DRAW) {
            return SolutionB::DRAW;
        }   

    }

    private function getMoveScore(string $play): int
    {
        if (in_array($play, SolutionB::ROCK_PLAY['movements'])) {
            return SolutionB::ROCK_PLAY['score'];
        }

        if (in_array($play, SolutionB::PAPER_PLAY['movements'])) {
            return SolutionB::PAPER_PLAY['score'];
        }

        if (in_array($play, SolutionB::SCISSORS_PLAY['movements'])) {
            return SolutionB::SCISSORS_PLAY['score'];
        }

        throw new \Exception("not valid movement choosed");
    }

    
}