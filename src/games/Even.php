<?php

namespace BrainGames\games\Even;

use function BrainGames\Cli\run;

const DESCRIPTION = 'Answer "yes" if the numbers is even, otherwise answer "no".';

function play()
{
    function isEven($num)
    {
        return $num % 2 == 0 ? 'yes' : 'no';
    }

    $foo = function () {
        $question = rand(10, 100);
        $arr[] = $question;
        $arr[] = isEven($question);
        return $arr;
    };

    run(DESCRIPTION, $foo);
}
