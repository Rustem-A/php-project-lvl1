<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function run($description, callable $foo, $times = 3)
{
    line('Welcome to the Brain 2ames!');
    line($description);
    $name = prompt('May I have your name?');
    line("Hello, %s! \n", $name);

    for ($i = 0; $i < $times; $i++) {
        [$question, $correct] = $foo();
        line("Question: %s", $question);
        $userAnswer = prompt('Your answer ');

        if ($userAnswer == $correct) {
            line("Correct! \n");
        } else {
            line("'$userAnswer' is wrong answer, correct answer was '$correct'.");
            line("Let's try again, %s!", $name);
            return;
        }
    }
    line('Congratulations, %s!', $name);
}
