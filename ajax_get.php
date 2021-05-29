<?php
// var_dump($_GET);
// exit();
include("functions.php");
$search_word = $_GET["searchword"]; // GETのデータ受け取り

$pdo = connect_to_db();

$sql = "SELECT * FROM todo_table WHERE todo LIKE '%{$search_word}%'";// SQL実行の処理を記述
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

if ($status == false) {
// エラー処理を記述 
$error=$stmt->errorInfo();
echo json_encode(["error_mag"=>"{$error[2]}"]);
exit();
} else {
// LIKEを使って検索
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
echo json_encode($result); // JSON形式にして出力 
exit();
}