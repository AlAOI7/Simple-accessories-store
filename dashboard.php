<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <h1>مرحبًا <?= $_SESSION['username']; ?>، لقد قمت بتسجيل الدخول بنجاح!</h1>

        <nav>
            <ul>
                <li><a href="dashboard.php">الصفحة الرئيسية </a></li>
                <li><a href="add_data.php">اضافة المتجر</a></li>
                <li><a href="show_data.php">عرض المنتجات</a></li>
                <li><a href="logout.php"> خروج</a></li>
            </ul>
        </nav>
    </header>

</body>

</html>