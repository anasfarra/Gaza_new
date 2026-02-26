document.addEventListener("DOMContentLoaded", () => {
    // جلب جميع الروابط التي تحتوي على الكلاس nav-link
    const links = document.querySelectorAll(".nav-link");

    links.forEach(link => {
        link.addEventListener("click", (e) => {
            e.preventDefault(); // منع السلوك الافتراضي للرابط

            // جلب اسم الصفحة من الخاصية data-page
            const targetPage = link.getAttribute("data-page");

            // الانتقال إلى الصفحة المطلوبة
            if (targetPage) {
                window.location.href = targetPage;
            }
        });
    });

    // Handle navigation buttons that were converted from onclick="window.location.href='...'"
    const navButtons = document.querySelectorAll('.nav-link-btn');
    navButtons.forEach(btn => {
        btn.addEventListener('click', function () {
            const href = this.getAttribute('data-href');
            if (href) {
                window.location.href = href;
            }
        });
    });
});

