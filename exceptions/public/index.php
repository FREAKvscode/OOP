<?php


class MyException extends \Exception {

}


class MyError extends \Error {

}


$exception = new MyException('Тест');
$error = new MyError('Тест');

echo "MyException:\n";
var_dump($exception instanceof \Throwable);
var_dump($exception instanceof \Exception);
var_dump($exception instanceof \Error);

echo "\nMyError:\n";
var_dump($error instanceof \Throwable);
var_dump($error instanceof \Error);
var_dump($error instanceof \Exception);


try {
    throw new MyException('Моё исключение');
} catch (\Throwable $exception) {
    echo "\nПоймано: " . get_class($exception) . ' — ' . $exception->getMessage() . "\n";
}


try {
    $zero = 0;
    $result = 5 / $zero;
} catch (\Throwable $exception) {
    echo "Поймано: " . get_class($exception) . ' — ' . $exception->getMessage() . "\n";
}


function sum(int $a, int $b): int
{
    return $a + $b;
}

try {
    sum('abc', 'def');
} catch (\Throwable $exception) {
    echo "Поймано: " . get_class($exception) . ' — ' . $exception->getMessage() . "\n";
}



