<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// استرجاع البيانات للمنتج المحدد
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("المنتج غير موجود.");
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        $stmt = $pdo->prepare("UPDATE products SET name = :name, description = :description, price = :price, image = :image WHERE id = :id");
        $stmt->execute(['name' => $name, 'description' => $description, 'price' => $price, 'image' => $image, 'id' => $id]);
        header("Location: show_data.php");
        exit;
    }
} else {
    die("معرّف المنتج غير موجود.");
}
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تعديل بيانات المنتج</title>
</head>
<body>
    <h1>تعديل بيانات المنتج</h1>
    <form action="" method="POST">
        <label for="name">اسم المنتج:</label>
        <input type="text" id="name" name="name" value="<?= htmlspecialchars($product['name']) ?>" required>
        <br>
        <label for="description">الوصف:</label>
        <textarea id="description" name="description" required><?= htmlspecialchars($product['description']) ?></textarea>
        <br>
        <label for="price">السعر:</label>
        <input type="number" id="price" name="price" step="0.01" value="<?= htmlspecialchars($product['price']) ?>" required>
        <br>
        <label for="image">رابط الصورة:</label>
        <input type="text" id="image" name="image" value="<?= htmlspecialchars($product['image']) ?>" required>
        <br>
        <input type="submit" value="تعديل المنتج">
    </form>
    <a href="show_data.php">عودة إلى عرض البيانات</a>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>
