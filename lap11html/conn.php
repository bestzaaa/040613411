<?php
$pdo = new PDO("mysql:host=localhost; dbname=blueshop; charset=utf8", "root", "");

$stmt=$pdo->prepare("SELECT * FROM member WHERE username = ?");
$stmt->bindParam(1,$_GET["username"]);
$stmt->execute();
$row=$stmt->fetch();
if(!empty($row)):
?>
    <div>
        name <?=$row["name"]?> <br>
        address <?=$row["address"]?> <br>
        mobile <?=$row["mobile"]?> <br>
        email <?=$row["email"]?>
    </div>
<?php endif;?>
