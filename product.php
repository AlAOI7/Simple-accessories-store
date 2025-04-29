<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>متجر الساعات النسائية</title>
</head>
<?php
// الاتصال بقاعدة البيانات
$servername = "localhost";
$username = "root"; // اسم المستخدم لقاعدة البيانات
$password = ""; // كلمة المرور لقاعدة البيانات
$dbname = "shopmwe";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("فشل الاتصال: " . $conn->connect_error);
}

// استعلام لجلب المنتجات
$result = $conn->query("SELECT * FROM products");
?>

<body>
    <header>
        <h1>متجر الساعات النسائية</h1>
        <nav>
            <ul>
                <li><a href="index.php">الصفحة الرئيسية </a></li>
                <li><a href="#about">عن المتجر</a></li>
                <li><a href="products.php">المنتجات</a></li>
                <li><a href="#contact">تواصل معنا</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>عن المتجر</h2>
        <p>نحن نقدم مجموعة متنوعة من الساعات النسائية الأنيقة.</p>
    </section>

    <section id="products">
        <h2>منتجاتنا</h2>
        <div class="product-container">
            <div class="product-item">
                <img src="4.jpg" alt="ساعة أنيقة" />
                <h3>ساعة أنيقة</h3>
                <p>ساعة مصنوعة من الفولاذ المقاوم للصدأ.</p>
                <button onclick="showDetails('ساعة أنيقة')">عرض التفاصيل</button>
            </div>
            <?php while ($row = $result->fetch_assoc()): ?>
            <div class="product-item">
                <img src="<?= $row['image']; ?>" alt="<?= $row['name']; ?>">
                <div class="product-details">
                    <h3><?= $row['name']; ?></h3>
                    <p><?= $row['description']; ?></p>
                    <div class="price">السعر: <?= $row['price']; ?> ر.س</div>
                    <button>عرض التفاصيل</button>
                </div>
            </div>
            <?php endwhile; ?>

            <div class="product-item">
                <img src="1.jpg" alt="ساعة كلاسيكية" />
                <h3>ساعة كلاسيكية</h3>
                <p>تصميم بسيط يناسب جميع الأوقات.</p>
                <button onclick="showDetails('ساعة كلاسيكية')">عرض التفاصيل</button>
            </div>
            <div class="product-item">
                <img src="2.jpg" alt="ساعة رياضية" />
                <h3>ساعة رياضية</h3>
                <p>مقاومة للماء ومثالية للأنشطة الخارجية.</p>
                <button onclick="showDetails('ساعة رياضية')">عرض التفاصيل</button>
            </div>
            <div class="product-item">
                <img src="3.jpg" alt="ساعة فاخرة" />
                <h3>ساعة فاخرة</h3>
                <p>مزودة بأحجار كريمة لتضفي لمسة من الفخامة.</p>
                <button onclick="showDetails('ساعة فاخرة')">عرض التفاصيل</button>
            </div>
        </div>
    </section>


    <footer>
        <p>جميع الحقوق محفوظة © 2024</p>
    </footer>

    <script src="scriptes.js"></script>
</body>

</html>