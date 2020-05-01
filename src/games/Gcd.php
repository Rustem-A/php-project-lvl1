<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Cli\run;

const DESCRIPTION = 'Find the greatest common divisor of given numbers';

function play()
{
    $foo = function () {
        $num1 = rand(9, 99);
        $num2 = rand(9, 99);

        for ($i = 1; $i <= $num1; $i++) {
            if ($num1 % $i == 0) {
                $dividersNum1[] = $i;
            }
        }

        for ($i = 1; $i <= $num2; $i++) {
            if ($num2 % $i == 0) {
                $dividersNum2[] = $i;
            }
        }

        $commonDividers = array_uintersect(
            $dividersNum1,
            $dividersNum2,
            function ($a, $b) {
                return $a <=> $b;
            }
        );

        $largestDivider = array_reduce(
            $commonDividers,
            function ($carry, $item) {
                if ($item > $carry) {
                    $carry = $item;
                }
                return $carry;
            },
            $commonDividers[0]
        );

        $question = "$num1 $num2";
        $arr[] = $question;
        $arr[] = $largestDivider;
        return $arr;
    };

    run(DESCRIPTION, $foo);
}
