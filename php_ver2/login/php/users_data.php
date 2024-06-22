<?php
$pdo = new PDO('mysql:host=db;dbname=users', 'root', 'admin');
$sql = "select * from user_info";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$datas = $stmt->fetchAll();
foreach ($datas as $data) {
    echo "<p>name : {$data["name"]}, pass : {$data["pass"]}</p>";
}
?>
<a href="./index.html">back</a>