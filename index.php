<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>متجر الساعات النسائية</title>
</head>

<body>
    <header>
        <h1>متجر الساعات النسائية</h1>
        <nav>
            <ul>
                <li><a href="index.php">الصفحة الرئيسية </a></li>
                <li><a href="#about">عن المتجر</a></li>
                <li><a href="product.php">المنتجات</a></li>
                <li><a href="login.php"> تسجيل</a></li>
            </ul>
        </nav>
    </header>

    <section id="about">
        <h2>عن المتجر</h2>
        <p>نحن نقدم مجموعة متنوعة من الساعات النسائية الأنيقة.</p>
        <img src="a.jpg" alt="ساعات نسائية" onclick="showImageDetails()"
            style="cursor: pointer; max-width: 100%; height: auto;" />
        <video width="320" height="240" controls>
            <source src="video.mp4" type="video/mp4">
            متصفحك لا يدعم تشغيل الفيديو.
        </video>
    </section>

    <section id="products">
        <h2>المنتجات</h2>
        <table>
            <tr>
                <th>اسم الساعة</th>
                <th>السعر</th>
                <th>تفاصيل</th>
            </tr>
            <tr>
                <td>ساعة أنيقة</td>
                <td>$50</td>
                <td><button onclick="showDetails('ساعة أنيقة')">عرض التفاصيل</button></td>
            </tr>
            <tr>
                <td>ساعة كلاسيكية</td>
                <td>$70</td>
                <td><button onclick="showDetails('ساعة كلاسيكية')">عرض التفاصيل</button></td>
            </tr>
            <tr>
                <td>ساعة رياضية</td>
                <td>$60</td>
                <td><button onclick="showDetails('ساعة رياضية')">عرض التفاصيل</button></td>
            </tr>
            <tr>
                <td>ساعة فاخرة</td>
                <td>$100</td>
                <td><button onclick="showDetails('ساعة فاخرة')">عرض التفاصيل</button></td>
            </tr>
        </table>
    </section>
    <section id="best-watches">
        <h2>أفضل الساعات النسائية</h2>
        <div class="watch-container">
            <div class="watch-item">
                <img src="1.jpg" alt="ساعة أنيقة" />
                <h3>ساعة أنيقة</h3>
                <p>ساعة مصنوعة من الفولاذ المقاوم للصدأ.</p>
            </div>
            <div class="watch-item">
                <img src="2.jpg" alt="ساعة كلاسيكية" />
                <h3>ساعة كلاسيكية</h3>
                <p>تصميم بسيط يناسب جميع الأوقات.</p>
            </div>
            <div class="watch-item">
                <img src="3.jpg" alt="ساعة رياضية" />
                <h3>ساعة رياضية</h3>
                <p>مقاومة للماء ومثالية للأنشطة الخارجية.</p>
            </div>
            <div class="watch-item">
                <img src="4.jpg" alt="ساعة فاخرة" />
                <h3>ساعة فاخرة</h3>
                <p>مزودة بأحجار كريمة لتضفي لمسة من الفخامة.</p>
            </div>
        </div>
    </section>

    <section id="contact">
        <h2>تواصل معنا</h2>
        <form action="process.php" method="POST">
            <label for="name">الاسم:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">البريد الإلكتروني:</label>
            <input type="email" id="email" name="email" required>
            <input type="submit" value="إرسال">
        </form>
    </section>

    <footer>
        <p>جميع الحقوق محفوظة © 2024</p>
    </footer>

    <script src="script.js"></script>
</body>

</html>