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
    <input type="text" name="keyword" placeholder="type and hit enter">
    <button>search</button>
</form>

</body>

</html>

<?php 

// GET details of server
//var_dump($_SERVER);

// super global get 
// echo '<pre>';
// var_dump($_GET);
// echo '<pre>';

if (isset($_GET['keyword'])){
$keyword = $_GET['keyword'];
echo $keyword.'<br>';
}

?>