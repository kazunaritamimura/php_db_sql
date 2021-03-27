<?php
if(
    !isset($_POST["name"])||$_POST["name"]==""||
    !isset($_POST["score"])||$_POST["score"]==""||
    !isset($_POST["naiyou"])||$_POST["naiyou"]==""
){
    exit('ParamError');
}

$name = $_POST["name"];
$score = $_POST["score"];
$naiyou = $_POST["naiyou"];

try {
    $pdo = new PDO('mysql:dbname=b_db;charset=utf8;host=localhost', 'root', 'root');
} catch (PDOException $e) {
    exit('DbConnectError:'.$e->getMessage());
}


$stmt = $pdo->prepare("INSERT INTO b_table(id, name, score, naiyou,
indate )VALUES(NULL, :name, :score, :naiyou, sysdate())");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':score', $score, PDO::PARAM_INT);
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status==false) {
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: practice.php");
    exit;
}