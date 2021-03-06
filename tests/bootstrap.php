<?php

if (!file_exists($autoloadFile = __DIR__ . '/../vendor/autoload.php') &&
    !file_exists($autoloadFile = __DIR__ . '/../../../../vendor/autoload.php')) {
    die('You must set up the project dependencies, run the following commands:' . PHP_EOL .
        'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        'php composer.phar install --dev' . PHP_EOL);
}

require $autoloadFile;
