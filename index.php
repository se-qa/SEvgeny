<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резюме: Шитов Евгений - QA Engineer</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Nunito+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Link to CSS file -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Favicon Link (укажите правильный путь, если он не в корне) -->
    <link rel="icon" type="image/png" href="favicon.png">

</head>
<body>

    <div class="container">
        <!-- Добавляем класс animate-on-scroll к header -->
        <header class="animate-on-scroll">
            <!-- === НАЧАЛО: Блок для Фото === -->
            <div class="header-photo">
                <img src="img/res_photo.png" alt="Фото Евгения Шитова">
            </div>
            <!-- === КОНЕЦ: Блок для Фото === -->
            <div class="header-left">
                <h1>Шитов Евгений</h1>
                <h2>QA Engineer</h2>
            </div>
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> <a href="tel:+79649998607">+7 964 999 8607</a></p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:qa.shitov@mail.ru">qa.shitov@mail.ru</a></p>
                <p><i class="fas fa-map-marker-alt"></i> <span>Город: Саратов</span></p>
                <p><i class="fab fa-telegram-plane"></i> <a href="https://t.me/Evgeny_Shitov" target="_blank" rel="noopener noreferrer">@Evgeny_Shitov</a></p>
                <p><i class="fab fa-github"></i> <a href="https://github.com/se-qa/memeApiTest" target="_blank" rel="noopener noreferrer">Github API project</a></p>
            </div>
        </header>

        <!-- Добавляем класс animate-on-scroll к секции -->
        <section id="summary" class="card animate-on-scroll">
            <h2><i class="fas fa-user-circle"></i> Краткая информация</h2>
            <p>
                Мне 35 лет, из которых последние 9 - опыт работы в роли QA Engineer. Мой основной профиль — ручное тестирование веб‑приложений:
                функциональное, нефункциональное, UI, интеграционное и полная регрессия. Дополнительно имею
                практический опыт проверки десктопных и мобильных решений. Понимаю весь жизненный цикл разработки
                и&nbsp;умею писать понятные тест‑кейсы, чек‑листы и баг‑репорты. Работал в Agile-командах (Scrum/Kanban)
                как&nbsp;на&nbsp;аутсорсе, так и в штате компании, поэтому легко встраиваюсь в любой процесс.
                В арсенале — Postman, SQL, Jira, DevTools и другие инструменты тестирования. Знаком с принципами CI/CD.
                Сейчас углубляюсь в&nbsp;автоматизацию: пишу автотесты на Python с Pytest, Selenium и Playwright, обкатываю
                их на учебных проектах.
            </p>
        </section>

        <!-- Добавляем класс animate-on-scroll к секции -->
        <section id="experience" class="card animate-on-scroll">
            <h2><i class="fas fa-briefcase"></i> Опыт работы</h2>

            <!-- Блок работы 1 -->
            <article class="job animate-on-scroll">
                 <div class="job-header">
                     <span class="job-title">QA Engineer</span>
                     <span class="company-name">ПАО "Сибур Холдинг"</span>
                 </div>
                <p class="job-dates">Апрель 2022 — Февраль 2025 (Москва)</p>
                <h4>Обязанности:</h4>
                <ul>
                    <li>Обеспечивал качество системы управления логистикой грузов (Web + Desktop).</li>
                    <li>Выполнял полный цикл ручного тестирования, анализ требований, разработку тестовой документации, тестирование API (Postman), валидацию данных (SQL).</li>
                    <li>Тесно взаимодействовал с командой разработки и аналитики.</li>
                </ul>
                <h4>Достижения:</h4>
                 <ul>
                    <li>Организовал процесс тестирования с нуля: определил этапы, разработал шаблоны и внедрил регулярные циклы тестирования -> обеспечил систематическое покрытие функциональности, своевременное обнаружение дефектов и стабильное качество релизов.</li>
                    <li>Инициировал исследование и предложил команде подход с использованием ИИ для автоматизации рутинной обработки данных (сбор, валидация, коррекция) -> продемонстрировал потенциал для&nbsp;сокращения времени ручной обработки примерно на 50% и минимизации ошибок.</li>
                    <li>Провел углубленное интеграционное тестирование компонентов системы -> выявил и способствовал устранению ряда критических дефектов, что предотвратило сбои в работе ключевых бизнес-процессов логистики.</li>
                 </ul>
            </article>

            <!-- Блок работы 2 -->
            <article class="job animate-on-scroll">
                <div class="job-header">
                    <span class="job-title">Manual QA Engineer</span>
                     <span class="company-name">OOO "CrackerJacks" (Аутсорсинг тестирования ПО)</span>
                </div>
                <p class="job-dates">Февраль 2016 — Март 2022 (Москва)</p>
                <h4>Обязанности:</h4>
                <ul>
                    <li>Проводил комплексное ручное тестирование веб- и мобильных проектов для различных заказчиков, включая функциональное, регрессионное, UI/UX, кросс-браузерное/кросс-платформенное, API (Postman, Swagger), локализации, установочное и тестирование доступности.</li>
                    <li>Разрабатывал тестовую документацию (TestRail, Confluence) и управлял дефектами (Jira, Redmine).</li>
                    <li>Вел до 3 проектов одновременно.</li>
                </ul>
                <h4>Достижения:</h4>
                <ul>
                    <li>Выявил ряд критических дефектов в механизме синхронизации CRM-системы и фронтенда путем детального тестирования -> обеспечил корректную и своевременную публикацию контента на сайте клиента, восстановив ключевую бизнес-функциональность.</li>
                    <li>Провел тестирование веб-сайтов и мобильных приложений на соответствие стандартам доступности (WCAG) с&nbsp;использованием скринридеров и других специализированных методик -> подготовил несколько проектов к&nbsp;использованию слабовидящими пользователями, расширив их аудиторию.</li>
                    <li>Стабильно обеспечивал высокое качество тестирования и эффективную коммуникацию на проектах -> получил положительные отзывы и рекомендации, что напрямую способствовало привлечению 3 новых крупных заказчиков для CrackerJacks.</li>
                    <li>Разработал и внедрил стандартизированные шаблоны баг-репортов и тестовой документации (чек-листов, тест-кейсов) -> унифицировал процесс тестирования в командах, ускорил обработку дефектов и&nbsp;упростил адаптацию новых сотрудников.</li>
                    <li>Успешно применил широкий спектр методик и инструментов для тестирования разнообразных проектов -> обеспечил качество и участвовал в своевременном выпуске более 30+ веб-проектов для известных клиентов.</li>
                </ul>
                 <div class="projects">
                     <strong>Список проектов (реализованных в CrackerJacks):</strong>
                     <p>Парк "Зарядье”, VEKA, Notamedia, Совкомбанк, МидРФ, Узнай Москву, Министерство культуры Российской Федерации, Музей "Моя история", Дилетант, Авто.ру, Движок, Бессмертный полк и другие.</p>
                 </div>
            </article>

        </section>

        <!-- Добавляем класс animate-on-scroll к секции -->
        <section id="skills" class="card animate-on-scroll">
            <h2><i class="fas fa-cogs"></i> Навыки</h2>
            <ul>
                <li>
                    <strong>Виды тестирования:</strong>
                    <ul>
                        <li><strong>Основные:</strong> Функциональное, Регрессионное, Интеграционное, API, UI/UX.</li>
                        <li><strong>Нефункциональные:</strong> Usability, Cовместимости, Локализации, Доступности, Установочное.</li>
                        <li><strong>Процессные:</strong> Исследовательское, Дымовое, Санитарное, Тестирование требований.</li>
                        <li><strong>Платформы:</strong> Web (Кросс-браузерное), Desktop (Windows), Mobile (Базово).</li>
                    </ul>
                </li>
                <li><strong>Документация:</strong> Написание Тест-кейсов, Чек-листов, Баг-репортов, Отчетов о тестировании.</li>
                <li><strong>Методологии:</strong> Agile (Scrum, Kanban), работа в проектах с менее структурированными процессами.</li>
                <li>
                    <strong>Инструменты:</strong>
                    <ul>
                        <li><strong>Баг-трекинг:</strong> Jira, Redmine, YouTrack.</li>
                        <li><strong>Тест-менеджмент/Документация:</strong> Confluence, TestRail, Test IT.</li>
                        <li><strong>АРІ Тестирование:</strong> Postman, Swagger, Charles Proxy.</li>
                        <li><strong>Базы данных:</strong> Dbeaver, DataGrip (SQL, NoSQL).</li>
                        <li><strong>DevTools:</strong> Браузерные инструменты разработчика (Chrome DevTools).</li>
                        <li><strong>Система контроля версий:</strong> Git (GitHub), CI/CD (GitHub Actions).</li>
                        <li><strong>Дизайн/Верстка:</strong> Figma, Photoshop, PixelPerfect (для UI/UX тестирования).</li>
                        <li><strong>Другое:</strong> Kafka, Pycharm, Docker, Linux.</li>
                    </ul>
                </li>
                 <li>
                    <strong>Базовые навыки автоматизации (Обучение + Практика):</strong>
                    <ul>
                        <li><strong>Язык:</strong> Python</li>
                        <li><strong>Фреймворки/Библиотеки:</strong> Pytest, Requests, Selenium, Playwright</li>
                        <li><strong>Типы:</strong> АРІ-тестирование, UI-тестирование</li>
                        <li><strong>Отчетность:</strong> Allure Report</li>
                        <li class="note"><em>(Примечание: Навыки получены в ходе обучения и самостоятельной практики)</em></li>
                    </ul>
                </li>
                 <li>
                    <strong>Дополнительно:</strong>
                     <ul>
                        <li>Применение инструментов AI для задач тестирования (генерация данных, анализ логов, автоматизация процессов).</li>
                        <li>Знания HTML/CSS.</li>
                    </ul>
                </li>
                <li>
                    <strong>Языки:</strong>
                    <ul>
                        <li>Русский (родной).</li>
                        <li>Английский (Intermediate - B1/B2, чтение технической документации, переписка).</li>
                    </ul>
                </li>
            </ul>
        </section>

        <!-- Добавляем класс animate-on-scroll к секции -->
        <section id="education" class="card animate-on-scroll">
            <h2><i class="fas fa-graduation-cap"></i> Образование</h2>
            <div class="education-entry">
                <h3>Саратовский Государственный Технический Университет имени Гагарина&nbsp;Ю.А.</h3>
                <p class="job-dates">2007 - 2013</p>
                <p style="font-weight: 400;">
                   <strong>Факультет:</strong> Электронной техники и приборостроения<br>
                   <strong>Специальность:</strong> Приборостроение<br>
                   <strong>Квалификация:</strong> Специалист
                </p>
            </div>
        </section>

        <!-- Добавляем класс animate-on-scroll к секции -->
        <section id="courses" class="card animate-on-scroll">
            <h2><i class="fas fa-certificate"></i> Курсы и Сертификации</h2>
            <ul>
                <li>Курс "Автоматизация тестирования на Python" (ООО “ОкуликБай”, 2024)</li>
                <li>Курс по Графическому дизайну и верстке (АНО "Учебный центр "Трайтек", 2017)</li>
            </ul>
        </section>

        <!-- Optional Footer -->
        <!--
        <footer class="animate-on-scroll">
            <p style="text-align: center; font-size: 0.8em; color: #888; font-family: 'Nunito Sans', sans-serif; font-weight: 300;">Резюме сгенерировано: [Текущая дата]</p>
        </footer>
        -->

    </div> <!-- end .container -->

    <!-- Link to JavaScript file (перед закрывающим body) -->
    <script src="js/script.js" defer></script>

</body>
</html>