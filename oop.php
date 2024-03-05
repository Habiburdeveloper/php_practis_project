<?php

class department{
    private $name;
    public $section;
    public function __construct($name, $section) {
        $this-> name = $name;
        $this-> section = $section;
    }
    protected function __destruct() {
       echo 'Department Name: '.$this-> name."<br>",
            'Department Section: '.$this-> section;
    }


}

class student extends department{
   
    
}
// $_Student = new student('PHP', 'oop');


class myOop{
    const NAME = 'Habibur Rahman';
    public function set(){
        return self::NAME;
    }
}
 $object_Oop = new myOop();
 echo $object_Oop -> set()."<br>";


// $_Department = new department('PHP', 'OOP');



//abstract ...
abstract class dataBase{
    abstract public function dataSave();
    abstract public function dataGetAll();
    abstract public function dataGetById($id);
    abstract public function dataDelete($id);
}

// interface..
interface Myfunction{
    public function save();
    public function delete();
    public function edit();
    public function update();
}


// Traite ..
trait Myinfos{
    public function name() {
        echo 'habib'.'<br>';
    }
}

trait Infodatails{
    public function datails() {
        echo 'village : Moniary';
    }
}

class Alldocuments{
    use Myinfos,
        Infodatails;
}

$ab = new Alldocuments();
echo $ab -> name();


//static method or property..
class Myclass{
    public static function getName(){
        echo 'Static method Done'.'<br>';
    }
    public function save() {
        self::getName();
    }
}
// Myclass::getName();
// $ob = new Myclass();
// echo $ob -> save();

class classInfo{
    public function allName(){
        Myclass::getName();
    }
}
// $classInfo = new classInfo();
// echo $classInfo -> allName();
class A extends Myclass{
    public static $nameSave;
    public function Ab(){
        self::$nameSave = parent::getName();
    }
}
$instant = new A();
echo $instant -> Ab();

?>