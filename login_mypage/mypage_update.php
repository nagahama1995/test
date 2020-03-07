<?php
mb_internal_encoding("utf8");

session_start();

try{
    $pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","");
}catch(PDOException $e){
    die("<p>申し訳ございません。現在サーバーが混み合っており一時的にアクセスができません。<br>しばらくしてから再度ログインしてください。</p><a href='http://localhost/login_mypage/login.php'>ログイン画面へ</a>");
}


$stmt = $pdo->prepare("update login_mypage set name = ?,mail=?,password=?,comments=? where id=?");


$stmt->bindValue(1,$_POST['name']);
$stmt->bindValue(2,$_POST['mail']);
$stmt->bindValue(3,$_POST['password']);
$stmt->bindValue(4,$_POST['comments']);
$stmt->bindValue(5,$_SESSION['id']);

$stmt->execute();




$stmt = $pdo->prepare("select * from login_mypage where mail = ? && password = ?");



$stmt->bindValue(1,$_POST['mail']);
$stmt->bindValue(2,$_POST['password']);

$stmt->execute();
$pdo = NULL;


while($row = $stmt->fetch()){
    $_SESSION['name']= $row['name'];
    $_SESSION['mail']= $row['mail'];
    $_SESSION['password']= $row['password'];
    $_SESSION['picture']= $row['picture'];
    $_SESSION['comments']= $row['comments'];
}


if(empty($_SESSION['name']) || empty($_SESSION['mail']) || empty($_SESSION['password']) || empty($_SESSION['picture']) || empty($_SESSION['comments'])){
    header("Location: http://localhost/login_mypage/login_error.php");
}


 header("Location: http://localhost/login_mypage/mypage.php");
?>



?>