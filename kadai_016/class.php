<?php

// Foodクラス
class Food {
    public $name;
    public $price;

    // コンストラクタ
    public function __construct($name, $price) {
        $this->name  = $name;
        $this->price = $price;
    }

    // priceプロパティを出力するメソッド
    public function show_price() {
        echo $this->name . 'の値段は' . $this->price . '円です。' . PHP_EOL;
    }
}

// Animalクラス
class Animal {
    public $name;
    public $height;
    public $weight;

    // コンストラクタ
    public function __construct($name, $height, $weight) {
        $this->name   = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    // heightプロパティを出力するメソッド
    public function show_height() {
        echo $this->name . 'の身長は' . $this->height . 'cmです。' . PHP_EOL;
    }
}

// --- Step3: インスタンスを作成してprint_rで出力 ---

$food   = new Food('りんご', 150);
$animal = new Animal('ライオン', 120, 190);

echo "=== Foodインスタンス ===" . PHP_EOL;
print_r($food);

echo "=== Animalインスタンス ===" . PHP_EOL;
print_r($animal);

// --- Step4: メソッドへアクセス ---

echo "=== メソッドの実行 ===" . PHP_EOL;
$food->show_price();
$animal->show_height();