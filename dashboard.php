<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        /* Общие стили */
        body {
            font-family: Arial, sans-serif; /* Устанавливаем шрифт */
            margin: 0; /* Убираем отступы по умолчанию */
            padding: 0; /* Убираем отступы по умолчанию */
        }

        /* Стили для заголовка */
        header {
            text-align: center; /* Выравниваем содержимое по центру */
            padding: 20px; /* Добавляем внутренние отступы */
            background-color: #333; /* Цвет фона */
            color: #fff; /* Цвет текста */
        }

        /* Стили для меню */
        .menu-icon {
            display: block;
            cursor: pointer;
            font-size: 24px;
            margin-right: 20px;
            margin-top: 20px;
            float: right;
            color: #fff; /* Добавим цвет для иконки */
        }

        nav ul {
            display: none;
        }

        nav ul.show {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <!-- Заголовок -->
        <h1>Witaj na Twoim dashboardzie!</h1>
        <!-- Меню -->
        <nav>
            <div class="menu-icon">&#9776;&#9776;&#9776;</div>
            <ul>
                <li><a href="#profile">Profil</a></li>
                <li><a href="#tasks">Wykonane zadania</a></li>
                <li><a href="#reputation">Reputacja</a></li>
                <!-- Добавьте ссылки на другие разделы, если необходимо -->
                <li><a href="logout.php">Wyloguj się</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <!-- Содержимое вашего dashboard может быть добавлено здесь -->
    </main>

    <footer>
        <!-- Футер вашей страницы -->
    </footer>

    <!-- JavaScript для открытия и закрытия мобильного меню -->
    <script>
        // Получаем элементы меню
        const menuIcon = document.querySelector('.menu-icon');
        const menu = document.querySelector('nav ul');

        // Добавляем обработчик события для клика по иконке меню
        menuIcon.addEventListener('click', () => {
            menu.classList.toggle('show');
        });
    </script>
</body>
</html>
