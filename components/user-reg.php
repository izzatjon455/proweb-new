<?
include_once('./db.php');

$login = $_POST['login'];
$password =$_POST['pass'];
$img = $_FILES['img'];
$name= pathinfo($img['name'],PATHINFO_FILENAME);
$ext= pathinfo($img['name'],PATHINFO_EXTENSION );

$path = "../img/server/$name.$ext";
move_uploaded_file($img['tmp_name'],"$path");
userReg($login,$password,$path);


header("Location:/?route=login");