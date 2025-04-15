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

    <!-- Favicon Link (замените href на путь к вашему файлу) -->
    <link rel="icon" type="image/png" href="favicon.png">

    <style>
        /* --- Общие Стили и Шрифты --- */
        body {
            font-family: 'Nunito Sans', sans-serif; /* Основной шрифт */
            font-weight: 300; /* Легкое начертание для основного текста */
            line-height: 1.7; /* Немного увеличим межстрочный интервал для читаемости */
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        /* --- Шрифты для Заголовков --- */
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Merriweather', serif; /* Шрифт для заголовков */
            font-weight: 700; /* Полужирное начертание для заголовков */
            color: #2c3e50; /* Цвет заголовков */
            margin-top: 1.5em; /* Отступ сверху */
            margin-bottom: 0.7em; /* Отступ снизу */
        }

        .container {
            max-width: 900px;
            margin: 30px auto;
            background-color: #fff;
            padding: 40px; /* Увеличим внутренние отступы */
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1); /* Немного изменим тень */
            border-radius: 8px;
        }

        /* --- Header --- */
        header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 25px;
            margin-bottom: 30px;
            flex-wrap: wrap;
        }

        .header-left h1 {
            margin: 0 0 5px 0;
            font-size: 2.5em;
            line-height: 1.1;
        }

        .header-left h2 {
            margin: 0;
            font-weight: 400; /* Обычное начертание Merriweather для подзаголовка */
            color: #3498db;
            font-size: 1.5em;
        }

        .contact-info {
            text-align: right;
            font-size: 0.95em;
            min-width: 250px;
            font-weight: 400; /* Немного увеличим вес для контактов */
        }

        .contact-info p {
            margin: 6px 0;
            display: flex;
            align-items: center;
            justify-content: flex-end;
        }

         .contact-info p i {
            margin-right: 10px; /* Немного увеличим отступ иконки */
            color: #3498db;
            width: 20px;
            text-align: center;
            font-size: 1.1em; /* Сделаем иконки чуть крупнее */
        }

        .contact-info a {
            color: #3498db;
            text-decoration: none;
            transition: color 0.3s ease; /* Плавный переход цвета для ссылок */
        }

        .contact-info a:hover {
            color: #2980b9; /* Затемнение при наведении */
            text-decoration: underline;
        }

        /* --- Секции --- */
        section {
            margin-bottom: 35px;
        }

        section h2 {
            font-size: 1.8em; /* Немного увеличим заголовки секций */
            border-bottom: 2px solid #3498db;
            padding-bottom: 8px;
            margin-bottom: 20px;
            display: flex; /* Для выравнивания иконки и текста */
            align-items: center;
        }

         section h2 i {
             margin-right: 12px; /* Отступ для иконки в заголовке секции */
             color: #3498db;
             font-size: 0.9em; /* Размер иконки относительно заголовка */
         }

        section h3 {
            font-size: 1.4em;
            color: #333;
            margin-bottom: 8px;
        }

        section h4 {
             font-size: 1.15em;
             color: #555;
             margin-top: 20px;
             margin-bottom: 10px;
             font-style: normal; /* Убираем курсив по умолчанию, делаем жирным */
             font-weight: 700;
             font-family: 'Nunito Sans', sans-serif; /* Заголовки достижений - другим шрифтом */
        }

        /* --- Списки --- */
        ul {
            list-style: none;
            padding-left: 0;
        }

        ul li {
            margin-bottom: 10px; /* Немного увеличим отступ */
            padding-left: 25px;
            position: relative;
            font-weight: 400; /* Обычное начертание для пунктов списка */
        }

        ul li::before {
            content: '•';
            color: #3498db;
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 1px; /* Подстроим позицию маркера */
            font-size: 1.2em; /* Чуть крупнее маркер */
        }

        ul ul {
           padding-left: 30px; /* Увеличим отступ вложенных списков */
           margin-top: 8px;
           margin-bottom: 12px;
        }

        ul ul li {
             font-weight: 300; /* Вложенные списки снова легкие */
             margin-bottom: 6px;
        }

        ul ul li::before {
             content: '◦';
             color: #555;
             font-weight: bold;
             font-size: 1em; /* Обычный размер для вложенного маркера */
             top: 2px;
        }

        strong {
            font-weight: 700; /* Используем самое жирное начертание Nunito Sans для strong */
            color: #2c3e50; /* Темнее для выделения */
        }

        /* --- Опыт Работы и Образование --- */
        .job, .education-entry {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee; /* Сделаем разделитель светлее */
        }
        .job:last-child, .education-entry:last-child {
             border-bottom: none;
             padding-bottom: 0;
             margin-bottom: 0;
        }

        .job-header {
            margin-bottom: 5px; /* Уменьшим отступ под заголовком работы */
        }

        .job-title {
            font-size: 1.15em; /* Немного увеличим */
            font-weight: 700; /* Используем Merriweather 700 */
            color: #3498db;
            display: block; /* Чтобы заголовок был на своей строке */
             margin-bottom: 2px;
        }

        .company-name {
            font-family: 'Nunito Sans', sans-serif; /* Название компании - обычным шрифтом */
            font-style: normal;
            font-weight: 400;
            color: #555;
            font-size: 1em;
        }

        .job-dates {
            font-family: 'Nunito Sans', sans-serif;
            font-size: 0.9em;
            color: #777;
            margin-bottom: 15px; /* Увеличим отступ под датами */
            font-weight: 400;
        }

        .projects {
            font-size: 0.95em;
            color: #555;
            margin-top: 15px;
            padding-left: 20px;
            border-left: 3px solid #eee;
            font-weight: 400; /* Проекты - обычным весом */
        }
         .projects strong {
             color: #333; /* Выделение в проектах */
             font-weight: 700;
         }

        .note {
            font-style: italic;
            color: #666;
            font-size: 0.9em;
            margin-top: 5px;
            font-weight: 400; /* Заметки тоже обычным весом */
        }

        /* --- Адаптивность --- */
        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }
            header {
                flex-direction: column;
                align-items: flex-start;
            }
            .contact-info {
                text-align: left;
                margin-top: 20px;
                width: 100%; /* Занять всю ширину на мобильных */
            }
             .contact-info p {
                 justify-content: flex-start;
             }
             section h2 {
                 font-size: 1.6em;
             }
             .header-left h1 {
                 font-size: 2em;
             }
             .header-left h2 {
                 font-size: 1.3em;
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
                <p><i class="fab fa-telegram-plane"></i> <a href="https://t.me/Evgeny_Shitov" target="_blank" rel="noopener noreferrer">@Evgeny_Shitov</a></p>
                <p><i class="fab fa-github"></i> <a href="https://github.com/se-qa/memeApiTest" target="_blank" rel="noopener noreferrer">github.com/se-qa/memeApiTest</a></p>
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
                        <li style="list-style: none; padding-left: 0; font-weight: 300;" class="note"><em>(Примечание: Навыки получены в ходе обучения и самостоятельной практики)</em></li>
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
                     <span class="job-title">QA Engineer</span>
                     <span class="company-name">ПАО "Сибур Холдинг"</span>
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
                    <span class="job-title">Manual QA Engineer</span>
                     <span class="company-name">OOO "CrackerJacks" (Услуги по тестированию ПО)</span>
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
                <p style="font-weight: 400;"> <!-- Сделаем текст описания образования чуть жирнее -->
                   <strong>Факультет:</strong> Электронной техники и приборостроения<br>
                   <strong>Специальность:</strong> Приборостроение<br>
                   <strong>Квалификация:</strong> Специалист
                </p>
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
            <p style="text-align: center; font-size: 0.8em; color: #888; font-family: 'Nunito Sans', sans-serif; font-weight: 300;">Резюме сгенерировано: [Текущая дата]</p>
        </footer>
        -->

    </div> <!-- end .container -->

</body>
</html>