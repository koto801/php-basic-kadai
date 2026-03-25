<?php
// Step2: 連想配列を作成する
$item = [
    '名前' => '玉ねぎ',
    '値段' => 200,
    '産地' => '北海道',
];

// Step3: foreachでキーと値を出力する
foreach ($item as $key => $value) {
    echo $key . ': ' . $value . '<br>';
}