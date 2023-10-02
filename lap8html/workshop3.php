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
<?php include "db.php"; ?>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
    echo "ชื่อสมาชิก: " . $row["name"] . "<br>";
    echo "ที่อยู่: " . $row["address"] . "<br>";
    echo "อีเมล์: " . $row["email"] . "<br>";
    
    echo '<div class="member-photo">';
    echo '<img src="member_photo/' . $row["username"] . '.jpg" width="100"><br>';
    echo '</div>';

    echo '<hr>';
}
?>
</body>
</html>
