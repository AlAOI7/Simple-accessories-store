<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_POST['image'];

    $stmt = $pdo->prepare("INSERT INTO products (name, description, price, image) VALUES (:name, :description, :price, :image)");
    $stmt->execute(['name' => $name, 'description' => $description, 'price' => $price, 'image' => $image]);
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
    <h1>إضافة بيانات منتج</h1>
    <?php if (isset($message)) : ?>
        <p style="color: green;"><?= $message ?></p>
    <?php endif; ?>
    <form action="" method="POST">
        <label for="name">اسم المنتج:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="description">الوصف:</label>
        <textarea id="description" name="description" required></textarea>
        <br>
        <label for="price">السعر:</label>
        <input type="number" id="price" name="price" step="0.01" required>
        <br>
        <label for="image">رابط الصورة:</label>
        <input type="text" id="image" name="image" required>
        <br>
        <input type="submit" value="إضافة المنتج">
    </form>
    <a href="show_data.php">عرض البيانات</a>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>
