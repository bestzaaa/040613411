<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<?php include "db.php"; ?>

<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row = $stmt->fetch()
?>
<div style="display:flex">
<div style="padding: 15px;">
<img src='member_photo/<?=$row["username"]?>.jpg' width='200'><br>
</div>
<h2><?=$row["username"]?></h2><br>
<?=$row["name"]?><br>
<?=$row["address"]?><br>
<?=$row["email"]?><br>
</div>
</body>
</html>
