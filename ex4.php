<!DOCTYPE html>
<html>
<body>

<?php
class Byebye {
  const MESSAGE = "Sathakaran thinesh";
  public function byebye() {
    echo self::MESSAGE;
  }
}

$Byebye = new Byebye();
$Byebye->byebye();
?>
</body>
</html>