<?php

require 'Validator.php';

use Validator\Validator;

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