
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
    <h2> please Enter two numbers and get output of these sum</h2>
    <input type="text" name="keyword1" placeholder="enter the number">
    <input type="text" name="keyword2" placeholder="enter the number">
    <button>SUM</button>
</form>

</body>

</html>

<?php

use \mvc_php\controller;
use \mvc_php\model;
use \mvc_php\view;


require_once "controller.php";
require_once "model.php";
require_once "view.php";


$model =  new Model();
$controller = new Controller($model);
$view = new View($controller);

$keyword1=null ;
$keyword2 = null ;
if (isset($_GET['keyword1'])){
    $keyword1 = $_GET['keyword1'];
   // echo $keyword.'<br>';
    }
if (isset($_GET['keyword2'])){
        $keyword2 = $_GET['keyword2'];
       // echo $keyword.'<br>';
 }

//controller->checkNumber($keyword2) 
$view->inputNumber($keyword1,$keyword2);


$view->outputNumber();

//echo 'the sum of these number is : '.$sum ;
?>
