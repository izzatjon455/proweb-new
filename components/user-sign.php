<?
include('../function.php');
include_once('./db.php');
userSign($_POST['login'], $_POST['pass']);

header("Location:/?route=main");