<?php

namespace BrainGames\games\Progression;

use function BrainGames\Cli\run;

const DESCRIPTION = 'What number is missing in the progression?';

function play()
{
    $foo = function () {
        $unkowNum = rand(1, 9);
        $startNum = rand(1, 89);
        $preResult = '';

        for ($k = 0, $i = $startNum, $j = 0; $j < 10; $k++, $i = $i + 2, $j++) {
            if ($k == $unkowNum) {
                  $preResult .= '.. ';
                  $correctNum = $i;
            } else {
                $preResult .= $i.' ';
            }
        }

        $question = $preResult;
        $arr[] = $question;
        $arr[] = $correctNum;
        return $arr;
    };

    run(DESCRIPTION, $foo);
}
