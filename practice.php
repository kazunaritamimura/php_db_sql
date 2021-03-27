<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>結果記録フォーム：POST</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="practice2.php">データ一覧</a></div>
    </div>
  </nav>
</header>

<form method="post" action="practice1.php">
<div class="jumbotron">
   <fieldset>
   <legend>結果記録フォーム</legend>
   <label>お名前:<input type="text" name="name" size="20"></label><br>
   <label>点数:<input type="text" name="score" size="20"></label><br>
   <label><textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
<input type="submit" value="送信">
</fieldset>
</div>
</form>

</body>
</html>
