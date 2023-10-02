<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        .member-photo {
            text-align: left;
            padding-left: 15px;
        }
    </style>
</head>
<body>
<form>
    <input type="text" name="keyword">
    <input type="submit" value="ค้นหา">
</form>

<?php include "db.php"; ?>
<div style="display:flex">
<?php
$stmt = $pdo->prepare("SELECT * FROM member WHERE username LIKE ?");
if (!empty($_GET))
$value = '%' . $_GET["keyword"].'%';
$stmt->bindParam(1,$value);
$stmt->execute();

?>
<?php while ($row = $stmt->fetch()) : ?>
<div style="padding: 15px;">
<img src='member_photo/<?=$row["username"]?>.jpg' width='200'><br>
<?=$row ["username"]?><br><?=$row ["name"]?>
</div>
<?php endwhile; ?>
</div>
</body>
</html>
