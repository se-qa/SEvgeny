<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Резюме: Шитов Евгений - QA Engineer</title>
    <!-- Link to Font Awesome for Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" type="image/png" href="favicon.png">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 20px;
            margin-bottom: 20px;
            flex-wrap: wrap; /* Allow wrapping on smaller screens */
        }

        .header-left h1 {
            margin: 0 0 5px 0;
            color: #2c3e50;
            font-size: 2.5em; /* Larger name */
        }

        .header-left h2 {
            margin: 0;
            font-weight: normal;
            color: #3498db; /* Accent color for title */
            font-size: 1.5em;
        }

        .contact-info {
            text-align: right;
            font-size: 0.95em;
            min-width: 250px; /* Ensure it doesn't get too squished */
        }

        .contact-info p {
            margin: 5px 0;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

         .contact-info p i {
            margin-right: 8px;
            color: #3498db; /* Icon color */
            width: 20px; /* Fixed width for alignment */
            text-align: center;
        }

        .contact-info a {
            color: #3498db;
            text-decoration: none;
        }

        .contact-info a:hover {
            text-decoration: underline;
        }

        section {
            margin-bottom: 30px;
        }

        section h2 {
            border-bottom: 2px solid #3498db;
            padding-bottom: 5px;
            margin-bottom: 15px;
            color: #2c3e50;
            font-size: 1.6em;
        }

        section h3 {
            color: #333;
            margin-bottom: 5px;
            font-size: 1.3em;
        }

        section h4 {
             color: #555;
             margin-top: 15px;
             margin-bottom: 5px;
             font-size: 1.1em;
             font-style: italic;
        }

        ul {
            list-style: none; /* Remove default bullets */
            padding-left: 0;
        }

        ul li {
            margin-bottom: 8px;
            padding-left: 20px; /* Indent list items */
            position: relative;
        }

        ul li::before { /* Custom bullet */
            content: '•';
            color: #3498db;
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 0px; /* Adjust vertical alignment */
        }

        ul ul { /* Nested lists */
           padding-left: 25px;
           margin-top: 5px;
           margin-bottom: 10px;
        }

        ul ul li::before {
             content: '◦'; /* Different bullet for nested items */
             color: #555;
        }

        strong {
            font-weight: 600;
            color: #444;
        }

        .job, .education-entry {
            margin-bottom: 25px;
            padding-bottom: 15px;
            border-bottom: 1px dashed #ccc;
        }
        .job:last-child, .education-entry:last-child {
             border-bottom: none;
             padding-bottom: 0;
             margin-bottom: 0;
        }


        .job-header {
            margin-bottom: 10px;
        }

        .job-title {
            font-weight: bold;
            font-size: 1.1em;
            color: #3498db;
        }

        .company-name {
            font-style: italic;
            color: #555;
        }

        .job-dates {
            font-size: 0.9em;
            color: #777;
            margin-bottom: 10px;
        }

        .projects {
            font-size: 0.9em;
            color: #666;
            margin-top: 10px;
            padding-left: 20px;
            border-left: 3px solid #eee;
        }
         .projects strong {
             color: #444;
         }

        .note {
            font-style: italic;
            color: #666;
            font-size: 0.9em;
            margin-top: 5px;
        }

        /* Simple responsive adjustment */
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            .contact-info {
                text-align: left;
                margin-top: 15px;
            }
             .contact-info p {
                 justify-content: flex-start;
             }
        }

    </style>
</head>
<body>

    <div class="container">
        <header>
            <div class="header-left">
                <h1>Шитов Евгений</h1>
                <h2>QA Engineer</h2>
            </div>
            <div class="contact-info">
                <p><i class="fas fa-phone"></i> <a href="tel:+79649998607">+7 964 999 8607</a></p>
                <p><i class="fas fa-envelope"></i> <a href="mailto:qa.shitov@mail.ru">qa.shitov@mail.ru</a></p>
                <p><i class="fas fa-map-marker-alt"></i> Город: Саратов</p>
                <p><i class="fab fa-telegram-plane"></i> <a href="https://t.me/Evgeny_Shitov" target="_blank">@Evgeny_Shitov</a></p>
                <p><i class="fab fa-github"></i> <a href="https://github.com/se-qa/memeApiTest" target="_blank">github.com/se-qa/memeApiTest</a></p>
            </div>
        </header>

        <section id="summary">
            <h2><i class="fas fa-user-circle"></i> Ключевая информация (Summary)</h2>
            <p>
                QA Engineer c 8-летним опытом ручного тестирования Web и Desktop приложений. Экспертиза
                в функциональном, нефункциональном, интеграционном, регрессионном и UI тестировании. Глубокое знание
                SDLC, опыт создания и ведения полной тестовой документации (тест-кейсы, чек-листы, баг-репорты).
                Работал в Agile-командах (Scrum/Kanban) как на аутсорсе, так и в штате компании. Уверенно использую
                Postman, SQL, Jira. Изучаю автоматизацию тестирования (Python, Pytest, Selenium, Playwright), имею
                практический опыт в учебных проектах.
            </p>
        </section>

        <section id="skills">
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
                        <li><strong>Система контроля версий:</strong> Git (GitHub).</li>
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
                        <li style="list-style: none; padding-left: 0;"><em>(Примечание: Навыки получены в ходе обучения и самостоятельной практики)</em></li>
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

        <section id="experience">
            <h2><i class="fas fa-briefcase"></i> Опыт работы</h2>

            <article class="job">
                 <div class="job-header">
                     <span class="job-title">QA Engineer</span> - <span class="company-name">ПАО "Сибур Холдинг"</span>
                 </div>
                <p class="job-dates">Апрель 2022 — Февраль 2025</p>
                <ul>
                    <li>Проводил полный цикл ручного тестирования (функциональное, регрессионное, интеграционное) системы управления логистикой грузов (Web-интерфейс и Desktop-приложение под Windows).</li>
                    <li>Анализировал и тестировал требования к продукту.</li>
                    <li>Разрабатывал и вел тестовую документацию (чек-листы, тест-кейсы, отчеты).</li>
                    <li>Создавал, верифицировал и отслеживал жизненный цикл дефектов в Redmine.</li>
                    <li>Тестировал АРІ бэкенда с помощью Postman.</li>
                    <li>Писал SQL-запросы MySQL (Dbeaver) для валидации данных и подготовки тестового окружения.</li>
                    <li>Использовал DevTools для анализа и отладки.</li>
                    <li>Тесно взаимодействовал с разработчиками и аналитиком для уточнения деталей реализации и решения проблем.</li>
                </ul>
                <h4>Достижения:</h4>
                 <ul>
                    <li>Инициировал исследование и предложил команде подход с использованием ИИ для автоматизации рутинной задачи: сбора, стандартизации, валидации и коррекции данных из входящих писем. Это продемонстрировало потенциал для значительного сокращения времени ручной обработки примерно на 50% и минимизации ошибок при подготовке данных для системы управления логистикой.</li>
                    <li>Выявил и задокументировал ряд критических дефектов на этапе интеграции компонентов системы, что предотвратило сбои в работе ключевых бизнес-процессов.</li>
                 </ul>
            </article>

            <article class="job">
                <div class="job-header">
                    <span class="job-title">Manual QA Engineer</span> - <span class="company-name">OOO "CrackerJacks" (Услуги по тестированию ПО)</span>
                </div>
                <p class="job-dates">Февраль 2016 — Март 2022</p>
                 <ul>
                    <li>Выполнял полный цикл тестирования для веб-проектов.</li>
                    <li>Проводил кросс-браузерное и кросс-платформенное тестирование.</li>
                    <li>Тестировал UI/UX, проверял соответствие верстки дизайн-макетам (PixelPerfect, Figma).</li>
                    <li>Разрабатывал и актуализировал тестовую документацию (тест-кейсы, чек-листы) в TestRail и Confluence.</li>
                    <li>Регистрировал и отслеживал дефекты в PMS системах (Jira, Redmine).</li>
                    <li>Тестировал АРІ бэкенда с помощью Postman и Swagger.</li>
                    <li>Проводил регрессионное, дымовое и приемочное тестирование перед релизами.</li>
                    <li>Проводил тестирование доступности на соответствие стандартам.</li>
                    <li>Анализировал требования, спецификации и пользовательские истории.</li>
                    <li>Использовал DevTools для диагностики проблем.</li>
                </ul>
                <h4>Достижения:</h4>
                <ul>
                    <li>Благодаря высокому качеству работы и положительным отзывам от клиентов, был рекомендован как специалист, что способствовало привлечению 3 крупных заказчиков для CrackerJacks.</li>
                    <li>Разработал и внедрил шаблоны баг-репортов и чек-листов, что унифицировало процесс и ускорило обработку дефектов в командах.</li>
                    <li>Успешно участвовал в тестировании и обеспечении качества более 30+ проектов.</li>
                </ul>
                 <div class="projects">
                     <strong>Проекты (Примеры, реализованные в рамках работы в CrackerJacks):</strong>
                     <p>Парк "Зарядье”, VEKA, Notamedia, Совкомбанк, МидРФ, Узнай Москву, Министерство культуры Российской Федерации, Музей "Моя история", Дилетант, Авто.ру, Движок, Бессмертный полк и другие.</p>
                 </div>
            </article>

        </section>

        <section id="education">
            <h2><i class="fas fa-graduation-cap"></i> Образование</h2>
            <div class="education-entry">
                <h3>Саратовский Государственный Технический Университет имени Гагарина Ю.А.</h3>
                <p class="job-dates">2007 - 2013</p>
                <p><strong>Факультет:</strong> Электронной техники и приборостроения<br>
                   <strong>Специальность:</strong> Приборостроение<br>
                   <strong>Квалификация:</strong> Специалист</p>
            </div>
        </section>

        <section id="courses">
            <h2><i class="fas fa-certificate"></i> Курсы и Сертификации</h2>
            <ul>
                <li>Курс "Автоматизация тестирования на Python" (ООО “ОкуликБай”, 2024)</li>
                <li>Курс по Графическому дизайну и верстке (АНО "Учебный центр "Трайтек", 2017)</li>
            </ul>
        </section>

        <!-- Optional Footer -->
        <!--
        <footer>
            <p style="text-align: center; font-size: 0.8em; color: #888;">Резюме сгенерировано: [Текущая дата]</p>
        </footer>
        -->

    </div>

</body>
</html>