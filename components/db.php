<?

function pdo() {
    $host = "localhost";
    $dbname = "php1700";
    $dbuser = "root";
    $dbpass = "root";

    return new PDO("mysql:host=$host; dbname=$dbname", $dbuser,$dbpass);
}

function userReg($login,$password,$img) {
    $pdo =pdo();
    $password = password_hash($password,PASSWORD_DEFAULT);
    $query = "INSERT INTO `users`(login, password, img) VALUES (?,?,?)";
    $driver = $pdo->prepare( $query);
    $driver->execute([$login,$password,$img]);
}

function userSign($login,$password) {
    $pdo =pdo();
    $query = "SELECT * FROM `users` WHERE login=?";
    $driver = $pdo->prepare($query);
    $driver->execute([$login]);

    $user = $driver->fetch(PDO::FETCH_ASSOC);
    if ($login==$user['login'] && password_verify($password,$user['password'])) {
      $_SESSION['name']=$user['login'];
      $_SESSION['img']=$user['img'];
        
    }
}


function writeComment($name,$comment,$img,$time) {
    $pdo =pdo();
    $query = "INSERT INTO `comments`(name, comment,img,time) VALUES (?,?,?,?)";    
    $driver = $pdo->prepare($query);
    $driver->execute([$name,$comment,$img,$time]);
}
function getComment() {
    $pdo =pdo();
    $query = "SELECT * FROM comments";    
    $driver = $pdo->prepare($query);
    $driver->execute();
    $comment =$driver->fetchAll(PDO::FETCH_ASSOC);
    return $comment;
}
function getForEdit($id) {
    $pdo =pdo();
    $query = "SELECT * FROM comments WHERE id=?";    
    $driver = $pdo->prepare($query);
    $driver->execute([$id]);
    $comment =$driver->fetch(PDO::FETCH_ASSOC);
    return $comment;
}
function editComment($id,$comment) {
    $pdo =pdo();
    $query = "UPDATE `comments` SET comment='$comment' WHERE id=?";    
    $driver = $pdo->prepare($query);
    $driver->execute([$id]);
}
function delComment($id) {
    $pdo =pdo();
    $query = "DELETE FROM comments WHERE id=?";    
    $driver = $pdo->prepare($query);
    $driver->execute([$id]);
}
