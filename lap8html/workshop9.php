<?php include "db.php" ?>
<html>
<head>
    <meta charset="utf-8">
    <script>
        function confirmDelete(username) {
            var ans = confirm("ต้องการลบสมาชิกรหัส " + username + " ใช่หรือไม่?");
            if (ans == true)
                document.location = "delete.php?username=" + username;
        }
    </script>
</head>
<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "username : " . $row["username"] . "<br>";
        echo "name : " . $row["name"] . "<br>";
        echo "address : " . $row["address"] . "<br>";
        echo "email : " . $row["email"] . "<br>"; 
        echo "<a href='editform.php?username=" . $row["username"] . "'>แก้ไข</a> | ";
        echo "<a href='#' onclick='confirmDelete(\"" . $row["username"] . "\")'>ลบ</a>";
        echo "<hr>\n";
    }
    ?>
</body>
</html>
