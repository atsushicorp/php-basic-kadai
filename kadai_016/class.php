<?php

class Food
{
  private $name;
  private $price;

  function __construct($name, $price){
    $this->name = $name;
    $this->price = $price;
  }

  public function show_price():int{
    return $this->price;
  }
}


class Animal
{
  private string $name;
  private float $height;
  private float $weight;
  
  
  function __construct($name, $height, $weight){
    $this->name = $name;
    $this->height = $height;
    $this->weight = $weight;
  }

  public function show_height():float{
    return $this->height;
  }
  
}
//インスタンス化
$food = new Food("potato","250");
$animal = new Animal("dog","60","5000");

//インスタンスの確認
print_r($animal);
echo "<br>";
print_r($food);
echo "<br>";

//インスタンスメソッド実行
$aniName = $animal->show_height();
echo "Animalオブジェクトのインスタンスメソッド(show_height)の実行結果は: ${aniName} です。<br>";

$fooPrice = $food->show_price();
echo "Foodオブジェクトのインスタンスメソッド(show_price)の実行結果は: ${fooPrice} です。";
