<html>
<body>
<?php include "db.php" ?>
<?php
$stmt = $pdo->prepare("INSERT INTO member VALUES (?, ?, ?, ?,?,?)");
$stmt->bindParam(1, $_POST["username"]);
$stmt->bindParam(2, $_POST["password"]);
$stmt->bindParam(3, $_POST["name"]);
$stmt->bindParam(4, $_POST["email"]);
$stmt->bindParam(5, $_POST["mobile"]);
$stmt->bindParam(6, $_POST["address"]);
$stmt->execute(); 
$username = $pdo->lastInsertId(); 
?></body>
</html>