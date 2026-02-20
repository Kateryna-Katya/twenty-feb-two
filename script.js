document.addEventListener('DOMContentLoaded', () => {
    // 1. Инициализация иконок и AOS
    lucide.createIcons();
    AOS.init({ duration: 1000, once: true });

    // 2. Плавный скролл (Lenis)
    const lenis = new Lenis();
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 3. Мобильное меню
    const burger = document.getElementById('burger');
    const mobileMenu = document.getElementById('mobileMenu');
    const mobileLinks = document.querySelectorAll('.mobile-menu__list a');

    const toggleMenu = () => {
        burger.classList.toggle('active');
        mobileMenu.classList.toggle('active');
        document.body.style.overflow = mobileMenu.classList.contains('active') ? 'hidden' : '';
    };

    burger.addEventListener('click', toggleMenu);
    mobileLinks.forEach(link => link.addEventListener('click', toggleMenu));

    // 4. Параллакс для Hero
    const hero = document.getElementById('hero');
    const heroBg = document.getElementById('heroBg');
    if (hero && heroBg) {
        hero.addEventListener('mousemove', (e) => {
            const moveX = (e.clientX - window.innerWidth / 2) / 50;
            const moveY = (e.clientY - window.innerHeight / 2) / 50;
            heroBg.style.transform = `translate(${moveX}px, ${moveY}px) scale(1.05)`;
        });
    }

    // 5. Валидация телефона (только цифры)
    const phoneInput = document.getElementById('phoneInput');
    phoneInput.addEventListener('input', (e) => {
        e.target.value = e.target.value.replace(/[^0-9+]/g, '');
    });

    // 6. Математическая капча
    const num1 = Math.floor(Math.random() * 10) + 1;
    const num2 = Math.floor(Math.random() * 10) + 1;
    const captchaResult = num1 + num2;
    document.getElementById('captchaLabel').innerText = `Сколько будет ${num1} + ${num2}?`;

    // 7. AJAX Отправка формы
    const form = document.getElementById('contactForm');
    const status = document.getElementById('formStatus');

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const userAnswer = parseInt(document.getElementById('captchaInput').value);

        if (userAnswer !== captchaResult) {
            alert('Ошибка в капче! Попробуйте снова.');
            return;
        }

        // Имитация AJAX
        status.innerText = 'Отправка данных...';
        status.className = 'form__status success';
        status.style.display = 'block';

        setTimeout(() => {
            status.innerText = 'Сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.';
            form.reset();
        }, 1500);
    });

    // 8. Cookie Popup
    const cookiePopup = document.getElementById('cookiePopup');
    const acceptBtn = document.getElementById('acceptCookies');

    if (!localStorage.getItem('cookiesAccepted')) {
        setTimeout(() => cookiePopup.classList.add('active'), 2000);
    }

    acceptBtn.addEventListener('click', () => {
        localStorage.setItem('cookiesAccepted', 'true');
        cookiePopup.classList.remove('active');
    });
});