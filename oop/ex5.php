<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {

  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "thinesh") {
      $prefix = "Mr";
    } elseif ($name == "Dilhani") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("thinesh");
echo "<br>";
echo $class->prefixName("Dilhani");
?>

</body>
</html>