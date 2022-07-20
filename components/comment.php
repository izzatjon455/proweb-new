<?

include_once('../function.php');
include_once('./db.php');
// var_dump($_POST['idea']);
if ($_POST['id']) {
    editComment($_POST['id'],$_POST['descr']);
}

else{
    date_default_timezone_set("Asia/Tashkent");
    $time = date("H:i");
    $comment = $_POST['descr'];
    $name = $_SESSION['name'];
    $img = $_SESSION['img'];
    writeComment($name,$comment,$img,$time);
}
header("Location:/?route=guest");