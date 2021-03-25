<?php

if(
    !isset($_POST["name"])||$_POST["name"]==""||
    !isset($_POST["score"])||$_POST["score"]==""||
    !isset($_POST["naiyou"])||$_POST["naiyou"]==""
){
    exit('ParamError');
}

$name=$_POST["name"];
$score=$_POST["score"];
$naiyou=$_POST["naiyou"];

try {
$pdo = new PDO('mysql:dbname=b_db;charset=utf8;host=localhost','root','root');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

$sql = "INSERT INTO b_table（id,name,score,naiyou,indate)VALUES(NULL,:a1,:a2,:a3,sysdate()）";
$stmt=$pdo->prepare($sql);
$stmt->bindValue(':a1',$name,PDO::PARAM_STR);
$stmt->bindValue(':a1',$score,PDO::PARAM_STR);
$stmt->bindValue(':a1',$naiyou,PDO::PARAM_STR);
$status=$stmt->execute();

$stmt = $pdo->prepare("SELECT * FROM b_table");
$status = $stmt->execute();

$view="";
if($status==false){
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= "<p>";
    $view .= $result["id"].":".$result["email"].$result["indate"];
    $view .= "</p>";
  }

}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>変差値グラフ</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">変差値診断</a>
      </div>
    </div>
  </nav>
</header>

<div>
    <div class="container jumbotron"><?=$view?></div>
</div>

</body>
</html>
