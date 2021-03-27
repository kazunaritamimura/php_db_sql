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


$sql = "INSERT INTO b_table(id, name, score, naiyou,
indate )VALUES(NULL, :a1, :a2, :a3, sysdate())";

$stmt = $pdo->prepare($sql);

$stmt->bindValue(':a1', $name, PDO::PARAM_STR);
$stmt->bindValue(':a2', $score, PDO::PARAM_INT);
$stmt->bindValue(':a3', $naiyou, PDO::PARAM_STR);
$status = $stmt->execute();

if ($status==false) {
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
} else {
    header("Location: practice.php");
    exit;
}
?>