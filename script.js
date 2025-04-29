
// دالة لعرض تفاصيل الساعة
function showDetails(watchName) {
    let details;
    switch (watchName) {
        case 'ساعة أنيقة':
            details = 'ساعة أنيقة مصنوعة من الفولاذ المقاوم للصدأ، مثالية للمناسبات الرسمية.';
            break;
        case 'ساعة كلاسيكية':
            details = 'ساعة كلاسيكية بتصميم بسيط يناسب جميع الأوقات.';
            break;
        case 'ساعة رياضية':
            details = 'ساعة رياضية مقاومة للماء، مثالية للأنشطة الخارجية.';
            break;
        case 'ساعة فاخرة':
            details = 'ساعة فاخرة مزودة بأحجار كريمة، تضيف لمسة من الفخامة.';
            break;
        default:
            details = 'لا توجد تفاصيل متاحة.';
    }
    alert('تفاصيل ' + watchName + ': ' + details);
}

// دالة لعرض تفاصيل الصورة
function showImageDetails() {
    const imageDetails = "هذه صورة لساعة نسائية أنيقة، مصنوعة من مواد عالية الجودة.";
    alert(imageDetails);
}


// دالة لعرض تفاصيل الساعة
function showDetails(watchName) {
    let details;
    switch (watchName) {
        case 'ساعة أنيقة':
            details = 'ساعة أنيقة مصنوعة من الفولاذ المقاوم للصدأ، مثالية للمناسبات الرسمية.';
            break;
        case 'ساعة كلاسيكية':
            details = 'ساعة كلاسيكية بتصميم بسيط يناسب جميع الأوقات.';
            break;
        case 'ساعة رياضية':
            details = 'ساعة رياضية مقاومة للماء، مثالية للأنشطة الخارجية.';
            break;
        case 'ساعة فاخرة':
            details = 'ساعة فاخرة مزودة بأحجار كريمة، تضيف لمسة من الفخامة.';
            break;
        default:
            details = 'لا توجد تفاصيل متاحة.';
    }
    alert('تفاصيل ' + watchName + ': ' + details);
}

// دالة لتغيير محتوى الصفحة
function changeContent() {
    const contentSection = document.getElementById('about');
    contentSection.innerHTML = `
        <h2>عن المتجر</h2>
        <p>نحن نقدم مجموعة متنوعة من الساعات النسائية الأنيقة، مع خيارات متعددة تناسب جميع الأذواق.</p>
        <img src="watches.jpg" alt="ساعات نسائية" />
        <video width="320" height="240" controls>
            <source src="video.mp4" type="video/mp4">
            متصفحك لا يدعم تشغيل الفيديو.
        </video>
    `;
}


