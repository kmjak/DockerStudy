<?php
try {
    $pdo = new PDO('mysql:host=db;dbname=users', 'root', 'admin');
    $sql = "insert into user_info (name,pass) values (:name,:pass)";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":name", $_POST['name'], PDO::PARAM_STR);
    $stmt->bindValue(":pass", $_POST['pass'], PDO::PARAM_STR);
    $stmt->execute();
} catch (PDOException $e) {
    echo $e;
}
header("Location:./users_data.php");
exit();