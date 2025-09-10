<?php

// require_once __DIR__ . '/../vendor/autoload.php';

// $path = __DIR__ . '/../vendor/autoload.php';
// echo $path; // /home/levik/hexlet-php/hello-world/../vendor/autoload.php

// require_once __DIR__ . 'vendor/autoload.php';

// $path = __DIR__ . '/vendor/autoload.php';
// echo $path; // /home/levik/hexlet-php/hello-world/vendor/autoload.php

require_once __DIR__ . '/vendor/autoload.php'; // /home/levik/hexlet-php/hello-world/vendor/autoload.php

// Файл не включается напрямую
// Он загрузится автоматически благодаря автозагрузке
use Hexlet\Php\Runner;

print_r(Runner\run());
