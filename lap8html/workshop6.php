<?php include "db.php" ?>
<html>
<head><meta charset="utf-8">
<script>
function confirmDelete(username) { // ฟังก์ชนจะถูกเรียกถ้าผู้ใช ั คลิกที่ ้ link ลบ
var ans = confirm("ต ้องการลบสนค ้ารหัส ิ " + username); // แสดงกล่องถามผู้ใช ้
if (ans==true) // ถ้าผู้ใชกด ้ OK จะเข ้าเงื่อนไขนี้
document.location = "delete.php?username=" + username; // สงรหัสส ่ นค ้าไปให ้ไฟล์ ิ delete.php
}
</script>
</head>
<body>
<?php
$stmt = $pdo->prepare("SELECT * FROM member");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "ชื่อ : " . $row ["username"] . "<br>";
echo "ชื่อ : " . $row ["name"] . "<br>";
echo "email: " . $row ["email"] . "<br>";
echo "address: " . $row ["address"] . "<br>";
echo "<a href='editform.php?username=" . $row ["username"] . "'>แก ้ไข</a> | ";
echo "<a href='#' onclick='confirmDelete(\"" . $row ["username"] ."\" )'>ลบ</a>";
echo "<hr>\n";
}
?>
</body>
</html>