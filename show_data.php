<?php
session_start();
require 'db.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// عملية الحذف
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $pdo->prepare("DELETE FROM products WHERE id = :id");
    $stmt->execute(['id' => $id]);
    header("Location: show_data.php");
    exit;
}

// استرجاع البيانات
$stmt = $pdo->query("SELECT * FROM products");
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>عرض البيانات</title>
</head>
<body>
    <h1>عرض المنتجات</h1>
    <table border="1">
        <tr>
            <th>اسم المنتج</th>
            <th>الوصف</th>
            <th>السعر</th>
            <th>الصورة</th>
            <th>الإجراءات</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?= htmlspecialchars($product['name']) ?></td>
                <td><?= htmlspecialchars($product['description']) ?></td>
                <td><?= htmlspecialchars($product['price']) ?> د.إ.</td>
                <td><img src="<?= htmlspecialchars($product['image']) ?>" alt="<?= htmlspecialchars($product['name']) ?>" style="width: 100px;"></td>
                <td>
                    <a href="edit_data.php?id=<?= $product['id'] ?>">تعديل</a>
                    <a href="?delete=<?= $product['id'] ?>" onclick="return confirm('هل أنت متأكد من الحذف؟');">حذف</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_data.php">إضافة منتج جديد</a>
    <a href="logout.php">تسجيل الخروج</a>
</body>
</html>
