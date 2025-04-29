<?php
$host = 'localhost'; // أو عنوان IP لقاعدة البيانات
$dbname = 'my_database';
$username = 'root'; // أو اسم المستخدم الخاص بك
$password = ''; // أو كلمة المرور الخاصة بك

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("فشل الاتصال: " . $e->getMessage());
}
?>



مستخدم افتراضي 

INSERT INTO users (username, password) VALUES ('testuser', '$2y$10$EixjLq5Zg/8L4sZ3CROrG.OXkC7c0K7DkG6m5Yk7MZ6C5VDG0sQnK'); 
-- كلمة المرور هي: password

انشاء جدول المستخدمين 

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);




جدول المنتجات
CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    image VARCHAR(255) NOT NULL
);
