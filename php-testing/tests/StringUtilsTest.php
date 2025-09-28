<?php

// Подключаем файл с определением функций
require_once __DIR__ . '/../src/StringUtils.php';

use StringUtils\capitalize;

if (StringUtils\capitalize('hello') !== 'Hello') {
    throw new \Exception('Функция работает неверно!');
}

if (StringUtils\capitalize('') !== '') {
    throw new \Exception('Функция работает неверно!');
}

echo 'Все тесты пройдены!';
