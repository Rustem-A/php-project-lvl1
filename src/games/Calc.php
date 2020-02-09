<?php

namespace BrainGames\games\Calc;

use function BrainGames\Cli\run;

const DESCRIPTION = 'What is the result of the expression?';

function play()
{
    $foo = function () {
        $num = rand(1, 10);
        $num2 = rand(1, 10);
        $operands = ['+', '-', '*'];
        $operand = $operands[rand(0, 2)];

        switch ($operand) {
            case "-":
                $result = $num - $num2;
                break;
            case "+":
                $result = $num + $num2;
                break;
            case "*":
                $result = $num * $num2;
                break;
            default:
                return false;
        }
        
        $question = "$num$operand$num2";
        $arr[] = $question;
        $arr[] = $result;
        return $arr;
    };
    run(DESCRIPTION, $foo);
}
