<?php

$fullDomain = strtolower($_SERVER['HTTP_HOST'] ?? '');
$fullDomain = explode(':', $fullDomain)[0];

$parts = explode('.', $fullDomain);
$domainSlug = count($parts) >= 2
        ? $parts[count($parts) - 2]
        : $fullDomain;

$domainTitle = ucwords(str_replace('-', ' ', $domainSlug));

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $domainTitle ?> | Экспертный консалтинг</title>
    
    <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%23c1ff00%22/><circle cx=%2250%22 cy=%2250%22 r=%2225%22 fill=%22%230a0a0a%22/></svg>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&family=Montserrat:wght@700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header class="header" id="header">
        <div class="container header__container">
            <a href="./#hero" class="logo">
                <span class="logo__dot"></span>
                <?= $domainTitle ?>
            </a>
            
            <nav class="nav" id="nav">
                <ul class="nav__list">
                    <li><a href="./#hero" class="nav__link">Главная</a></li>
                    <li><a href="./#services" class="nav__link">Услуги</a></li>
                    <li><a href="./#insights" class="nav__link">Аналитика</a></li>
                    <li><a href="./#about" class="nav__link">О нас</a></li>
                    <li><a href="./#cases" class="nav__link">Кейсы</a></li>
                </ul>
            </nav>

            <a href="./#contact" class="btn btn--primary header__cta">
                Связаться
                <i data-lucide="arrow-up-right"></i>
            </a>

            <button class="burger" id="burger" aria-label="Menu">
                <span></span>
            </button>
        </div>
    </header>

    <main class="legal-page">
    <section class="pages">
        <div class="container">
            <span class="section-tag" data-aos="fade-down">Payment & Refunds</span>
            <h1 data-aos="fade-right">Политика возврата средств</h1>
            
            <div class="legal-content">
                <div class="policy-hero-card refund-accent" data-aos="zoom-in">
                    <p>
                        Мы стремимся к максимальной прозрачности. 
                        В <strong><?= $domainTitle ?></strong> предусмотрена процедура возврата средств, 
                        основанная на качестве услуг и защите прав потребителей Великобритании.
                    </p>
                </div>

                <h2 data-aos="fade-up">Условия для оформления возврата</h2>
                <div class="refund-grid">
                    <div class="refund-card" data-aos="fade-up" data-aos-delay="100">
                        <i data-lucide="file-text"></i>
                        <h3>Несоответствие программе</h3>
                        <p>Если содержание материалов существенно отличается от заявленного на <strong><?= $domainTitle ?></strong>.</p>
                    </div>
                    <div class="refund-card" data-aos="fade-up" data-aos-delay="200">
                        <i data-lucide="settings"></i>
                        <h3>Технические проблемы</h3>
                        <p>Критические ошибки на <strong><?= $fullDomain ?></strong>, не устраненные в разумные сроки.</p>
                    </div>
                    <div class="refund-card" data-aos="fade-up" data-aos-delay="300">
                        <i data-lucide="clock"></i>
                        <h3>Период охлаждения</h3>
                        <p>Отказ в течение 14 дней с момента оплаты при минимальном использовании материалов.</p>
                    </div>
                </div>

                <div class="procedure-block" data-aos="fade-up">
                    <h2>Процедура запроса на возврат</h2>
                    <p>Чтобы инициировать процедуру на платформе <strong><?= $domainTitle ?></strong>, выполните шаги:</p>
                    <div class="steps-mini">
                        <div class="step-mini" data-aos="fade-right" data-aos-delay="100"><span>1</span> Письмо на <a href="mailto:hello@<?= $fullDomain ?>">hello@<?= $fullDomain ?></a></div>
                        <div class="step-mini" data-aos="fade-right" data-aos-delay="200"><span>2</span> Тема: «Запрос на возврат средств»</div>
                        <div class="step-mini" data-aos="fade-right" data-aos-delay="300"><span>3</span> Данные: ФИО, Email, Название программы</div>
                        <div class="step-mini" data-aos="fade-right" data-aos-delay="400"><span>4</span> Подробное описание причины запроса</div>
                    </div>
                </div>

                <h2 data-aos="fade-up">Сроки и способ возврата</h2>
                <p data-aos="fade-up">
                    После одобрения возврат будет произведен в течение <strong>7–14 рабочих дней</strong>. 
                    Средства возвращаются тем же способом, которым была совершена оплата. 
                    Срок зачисления зависит от регламента вашего банка в Великобритании или стране пребывания.
                </p>

                <div class="warning-block" data-aos="fade-up">
                    <h2>Исключения и ограничения</h2>
                    <ul class="legal-list">
                        <li>Запрос подан по истечении 14 календарных дней с момента оплаты.</li>
                        <li>Просмотрено или скачано более 50% материалов программы.</li>
                        <li>Технические проблемы на стороне пользователя (софт, соединение).</li>
                        <li>Нарушение условий соглашения <strong><?= $domainTitle ?></strong>.</li>
                    </ul>
                </div>

                <div class="contact-info-block" data-aos="zoom-in" style="margin-top: 60px;">
                    <h2>Свяжитесь с нами</h2>
                    <p>По всем вопросам возврата средств обращайтесь в нашу службу поддержки:</p>
                    <a href="mailto:hello@<?= $fullDomain ?>" class="policy-mail">hello@<?= $fullDomain ?></a>
                </div>
            </div>
        </div>
    </section>
</main>

    <footer class="footer">
        <div class="container footer__grid">
            <div class="footer__col">
                <a href="./#hero" class="logo logo--footer">
                    <span class="logo__dot"></span>
                    <?= $domainTitle ?>
                </a>
                <p class="footer__description">
                    Технологии нового поколения для трансформации вашего бизнеса на европейском рынке.
                </p>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Навигация</h4>
                <ul class="footer__links">
                    <li><a href="./#hero">Главная</a></li>
                    <li><a href="./#services">Услуги</a></li>
                    <li><a href="./#insights">Аналитика</a></li>
                    <li><a href="./#about">О нас</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Документы</h4>
                <ul class="footer__links">
                    <li><a href="./privacy.php">Privacy Policy</a></li>
                    <li><a href="./cookies.php">Cookies Policy</a></li>
                    <li><a href="./terms.php">Terms of Service</a></li>
                    <li><a href="./return.php">Return Policy</a></li>
                    <li><a href="./disclaimer.php">Disclaimer</a></li>
                    <li><a href="./personal-data-policy.php">Personal Data</a></li>
                    <li><a href="./contact.php">Contact Us</a></li>
                </ul>
            </div>

            <div class="footer__col">
                <h4 class="footer__title">Контакты</h4>
                <ul class="footer__contact-list">
                    <li>
                        <i data-lucide="phone"></i>
                        <a href="tel:+4420004672673">+44 20 0046 72673</a>
                    </li>
                    <li>
                        <i data-lucide="mail"></i>
                        <a href="mailto:support@<?= $fullDomain ?>">support@<?= $fullDomain ?></a>
                    </li>
                    <li>
                        <i data-lucide="map-pin"></i>
                        <span>22 Bishopsgate, London EC2N 4BQ, United Kingdom</span>
                    </li>
                </ul>
            </div>
        </div>
        
        <div class="container footer__bottom">
            <p>&copy; 2026 <?= $domainTitle ?>. Все права защищены. Экспертная поддержка на всех этапах.</p>
        </div>
    </footer>
    <div id="cookiePopup" class="cookie-popup">
        <p class="cookie-popup__text">Этот сайт использует cookies для улучшения работы. Подробнее — в нашей <a href="./cookies.php">Cookie политике</a>.</p>
        <button id="acceptCookies" class="btn btn--primary btn--sm">Принять</button>
    </div>
    
    <div class="mobile-menu" id="mobileMenu">
        <ul class="mobile-menu__list">
            <li><a href="./#hero">Главная</a></li>
            <li><a href="./#services">Услуги</a></li>
            <li><a href="./#insights">Аналитика</a></li>
            <li><a href="./#about">О нас</a></li>
            <li><a href="./#cases">Кейсы</a></li>
            <li><a href="./#contact" class="btn btn--primary">Связаться</a></li>
        </ul>
    </div>
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/studio-freight/lenis@1.0.19/bundled/lenis.min.js"></script>
    <script src="script.js"></script>
</body>
</html>