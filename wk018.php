<?PHP
//親クラス（抽象クラスを定義）
abstract class Car{ 
    public $name;
    public function __construct($name){
        $this->name = $name; //引数の$nameを親クラスの$nameに代入
    }
    abstract public function intro() : string; //抽象化された関数（戻り値は文字列）
}

//子クラス
class Audi extends Car{ //親クラスCarから継承した子クラス
 //抽象クラスを定義
  public function intro() : string {
        return "Choose German quality! I'm an $this->name!";
    }
}

class Volvo extends Car {
    public function intro() : string {
      return "Proud to be Swedish! I'm a $this->name!";
    }
  }
  
  class Citroen extends Car {
    public function intro() : string {
      return "French extravagance! I'm a $this->name!";
    }
  }

  //子クラスのAudiクラスからインスタンス生成
  $audi = new audi("Audi");//親クラスのコンストラクトが発動し親クラスの$nameに"Audi"が代入する
  echo $audi->intro();//Audiクラスのintroを実行しechoで表示
  echo "<br>";

  $volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

$citroen = new citroen("Citroen");
echo $citroen->intro();

?>