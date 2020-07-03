<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>Japanese Word Pad</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">Word Index</a></div>
    <div class="navbar-header"><a class="navbar-brand" href="login.php">Login</a></div>
    <!-- <div class="navbar-header"><a class="navbar-brand" href="logout.php">ログアウト</a></div> -->
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="POST" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>Japanese Word Pad Function</legend>
     <label>Word<input type="text" name="name"></label><br>
     <label>Meaning<input type="text" name="meaning"></label><br>
     <label>Content<textArea name="naiyou" rows="2" cols="40"></textArea></label><br>
     <label>Memo<textArea name="memo" rows="2" cols="40"></textArea></label><br>
     <input type="submit" value=" Register ">
     <a href="select.php" class="word_index"> 【Word Index】 </a>
     <a href="quiz.php" class="quiz"> 【Quiz】 </a>

    </fieldset>
  </div>
</form>
<!-- Main[End] -->
</body>
</html>
