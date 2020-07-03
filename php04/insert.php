<?php
//1. POSTデータ取得
$name   = $_POST["name"];
$meaning  = $_POST["meaning"];
$naiyou = $_POST["naiyou"];
$memo = $_POST["memo"];

//2. DB接続します
require "funcs.php";
$pdo = db_conn();


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_an_table(name,meaning,naiyou,memo)VALUES(:name,:meaning,:naiyou,:memo)");
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':meaning', $meaning, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':naiyou', $naiyou, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':memo', $memo, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute(); //実行

//４．データ登録処理後
if($status==false){
  sql_error($stmt);
}else{
  redirect("index.php");
}
?>
