<!DOCTYPE html>
<html>
<body>

<?php

// 01
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}

// 02 
/*
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyName("Hege", "1975");
  familyName("Stale", "1978");
  familyName("Kai Jim", "1983");*/
  
?>


</body>
</html>