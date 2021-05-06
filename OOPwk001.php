<?php
/*幅と高さのwidth and height値を与えるコンストラクタのクラスを定義
２つのサブクラスtriangle と rectangleを定義しarea()で面積を計算する
その後、triangle と rectangleの２つの変数を定義して
２つの変数からarea()関数を呼び出す
*/

class Length{
    public $width;
    public $height;

    function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Length{
    public function area(){
        echo ($this->width * $this->height ) / 2;
    }
}

class Rectangle extends Length{
    public function area(){
        echo $this->width * $this->height;
    }
}

$triangle = new Triangle(10,5); //width10　height5
$triangle->area();

echo "<br>";

$rectangle = new Rectangle(10,5); //width10　height5
$rectangle->area();

?>