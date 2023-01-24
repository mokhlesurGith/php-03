<?php 

// php ta 2 ta contruct and distuct
class fruit{
// property
    public $name;
    public $color;
    // function
    public function set_name($v){
        $this->name = $v;
    }
    public function set_color($v){
        $this->color = $v;
    }
    public function get_name(){
        return $this->name;
    }
    public function get_color(){
        return $this->color;
    }
}
$Mango = new fruit();
$Banana = new fruit();
$Jackfruit = new fruit();

$Mango->set_name("Mango");
$Banana->set_name("Segor Kathal");
$Jackfruit->set_name("Deshi Kathal");

$Mango->set_color("red");
$Banana->set_color("yellow");
$Jackfruit->set_color("yellow");


echo $Mango->get_name();
echo "<br>";

echo $Banana->get_name();
echo "<br>";
echo $Jackfruit->get_name();
echo "<br>";

echo $Mango->get_color();
echo "<br>";
echo $Banana->get_color();
echo "<br>";
echo $Jackfruit->get_color();
echo "<br>";
?>