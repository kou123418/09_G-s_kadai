<?php
require "funcs.php";
$pdo = db_conn();

$stmt = $pdo->prepare("SELECT id FROM gs_an_table");
$quiz = $stmt->execute();
$count = $stmt->rowCount();
// $count = count($id);
$id = rand(3,$count+2);
echo $count;

$stmt2 = $pdo->prepare("SELECT * FROM gs_an_table WHERE id = :id");
//対象のIDが何かが分からなくなっている。id = :idという書き方だと指定していない。
// SQLの列数をカウントして、それをrandで任意にとってくるやり方がよいかも。

$stmt2->bindvalue(':id',$id,PDO::PARAM_INT);
$quiz2 = $stmt2->execute();

$example="";
if($quiz2==false){
    $error =  $stmt2->errorInfo();
    exit("ErrorQuery:".$error[2]);
}else{
    while( $result = $stmt2->fetch(PDO::FETCH_ASSOC)){
        $example .= "<p>";
        $example .= '[Question] '.$result['word'];
        $example .= "</p>";
    }
}
// 登録された情報を表示してそれの答え合わせをしたい。

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">Word Pad register</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="answer.php">
<div>
    <div class="container jumbotron"><?=$example?></div>
    <div class="container answer">こたえ　<input type="text" name="answer"></div>
    <div class="container answer"><input type="submit" name="submit" value="答え合わせ"></div>
</div>
</form>
<!-- Main[End] -->
</body>
</html>