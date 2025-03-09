<?php

namespace Validator;
class Validator
{
    public function isValid($expression): bool
    {

        $count = 0;
        for ($i = 0; $i < strlen($expression); $i++) {
            $char = $expression[$i];
            if ($char === '(') {
                $count++;
            } elseif ($char === ')') {
                if ($count === 0) {
                    return false;
                }
                $count--;
            }
        }
        return $count === 0;
    }
}