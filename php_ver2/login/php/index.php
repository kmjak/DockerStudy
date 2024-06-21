<?php
$pdo = new PDO('mysql:host=db;dbname=users', 'root', 'admin');
$sql = "select * from user_info";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$datas = $stmt->fetchAll();
foreach ($datas as $data) {
    echo "<p>名前 : {$data["name"]}, パスワード : {$data["pass"]}</p>";
}