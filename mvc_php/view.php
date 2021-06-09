<?php

namespace mvc_php;

class View
{   
    public $controller;
    public $sum;
   // public $errormessage;
    public function __construct($controller)
    {
        $this->controller = $controller;
    }

    public function inputNumber($num1 , $num2)
    {
        if(is_int($num1)){
        $this->controller->setVeriable($num1,$num2);
        }
        else{
           echo $this->controller->getError();
        }
    }
    public function outputNumber()
    {
        $this->sum = $this->controller->getOutput();
        echo $this->sum ;
    }
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

<form action="<?php ?>" method="get">
    
</form>

</body>

</html>



