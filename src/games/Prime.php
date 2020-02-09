<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\run;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function play()
{
    $foo = function () {
        $num = rand(1, 99);
        for ($i = 2; $i < $num; $i++) {
            if ($num % $i == 0) {
                $correct = 'no';
                break;
            } else {
                $correct = 'yes';
            }
        }

        $question = $num;
        $arr[] = $question;
        $arr[] = $correct;
        return $arr;
    };

    run(DESCRIPTION, $foo);
}
