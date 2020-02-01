<?php

// 基本となるタイプの定義
$fizzBuzzTypes = [
    1 => 'Fizz',
    2 => 'Buzz',
    3 => 'FizzBuzz'
];

for ($num = 1; $num <= 100; $num++) {
    // 要素0に対象の値を格納
    $fizzBuzzTypes[0] = "$num";

    // 対象の値を添字へ換算
    // 5の倍数の剰余の有無を第二ビット、
    // 3の倍数の剰余の有無を第一ビットとすることで、
    // 添字の0~3を表現する。
    $index = intval($num % 5 === 0) << 1 | intval($num % 3 === 0);

    // 表示
    echo $fizzBuzzTypes[$index] . PHP_EOL;
}
