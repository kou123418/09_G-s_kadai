<?php

$answer = $_POST["answer"];

if($answer == "meaning"){
    echo "正解です";
}else {
    echo "不正解です";
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">

    </div>
  </nav>
</header>
<div>
    <a class="container jumbotron" href="quiz.php">Next Quiz</div>
    </div>
</body>
</html>