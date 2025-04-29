

<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = $_POST['data'];

    $stmt = $pdo->prepare("INSERT INTO data_table (data) VALUES (:data)");
    $stmt->execute(['data' => $data]);
    $message = "تمت إضافة البيانات بنجاح!";
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>إضافة بيانات</title>
</head>
<body>
    <h1>إضافة بيانات</h1>
    <?php if (isset($message)) : ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="data">البيانات:</label>
        <input type="text" id="data" name="data" required>
        <br>
        <input type="submit" value="إضافة البيانات">
    </form>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>
