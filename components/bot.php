<?

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$descr = $_POST['descr'];

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    if (isset($name)) {
        if (!empty($name)) {
            $name = strip_tags($name);
            $nameTitle = "First Name : ";
        }
    }
    if (isset($phone)) {
        if (!empty($phone)) {
            $phone = strip_tags($phone);
            $phoneTitle = "Phone Number : ";
        }
    }
    if (isset($email)) {
        if (!empty($email)) {
            $email = strip_tags($email);
            $emailTitle = "Email Address: ";
        }
    }
    if (isset($descr)) {
        if (!empty($descr)) {
            $descr = strip_tags($descr);
            $descrTitle = "Comment : ";
        }
    }

$array = array(
    $nameTitle => $name,
    $phoneTitle => $phone,
    $emailTitle => $email,
    $descrTitle => $descr
);
$text= "";

foreach ($array as $key => $value) {
    $text .= "<b>".$key."</b>".$value."%0A";
}


$token = "5325202495:AAGnNjfksI-FCKuokegNMKYmzsZMKyXSKyA";
$chat_id= "1282345286";


$send = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$text}","r");



if ($send) {
    header("Location:/?route=telegram");
}








}
