<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public $weight;

  function set_name($n) {  
    $this->name = $n;
  }

  /*
  public function set_color($n) { 
    $this->color = $n;
  }*/

  protected function set_color($n) { 
    $this->color = $n;
  }
  private function set_weight($n) { 
    $this->weight = $n;
  }
}

$mango = new Fruit();
$mango->set_name('Mango'); 
//$mango->set_color('Yellow'); 
//$mango->set_weight('300'); 
?>

</body>
</html>