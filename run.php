<?php

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
if ($argc !== 2) {
    echo "Использование: php run.php '<ваше выражение>'\n";
    exit(1);
}

$expression = $argv[1];
$validator = new Validator();

if ($validator->isValid($expression)) {
    echo "Всё ок\n";
} else {
    echo "Ошибка\n";
}