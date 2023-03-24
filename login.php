<?php
    session_start();

    if ($_SESSION['user']) {
        header('Location: /ustumsuufinal/index.php');
    }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ST-Bridge</title>
    <link rel="stylesheet" href="public/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>


    
    <div class="container">
        <div class="login">
            <div class="login__left">
                <div class="login__left__logo">
                    <img src="img/logo.png" alt="">
                </div>
                <form class="login__form">
                    <h4 class="login__left__label">Логин</h4>
                    <input name="login" id="login" type="text">
                    <h4 class="login__left__label">Пароль</h4>
                    <input name="password" type="password">
                    <input name="checkbox" type="checkbox">
                    <label for="checkbox">Запомнить пароль</label>
                    <input class="login__left__input" type="submit" value="Войти">
                </form>
                <p class="msg none">Неверный пароль или логин.</p>
                <div class="login__left__dlcall">
                    <h4 class="login__left__dlc"><a href="register.php">Зарегистрироваться</a></h4>
                    <h4 class="login__left__dlc"><a href="#">Восстановаить доступ</a></h4>
                    <h4 class="login__left__dlc"><a href="#">Изменить пароль</a></h4>
                </div>
            </div>
            <div class="right">
                <h1 class="login__right__title"><span>Помощь</span> в адаптации якутских студентов, учащихся за пределами Республики Саха (Якутия). <span>Объединяем студентов</span> из разных университетов и колледжей, <span>оказываем</span> <span>поддержку</span> в решении различных вопросов.</h1>
            </div>
        </div>
    </div>





    <section class="section__rass">
        <div class="container">
            <div class="rass">
                <p>Будьте в курсе всех мероприятий, подпишитесь на рассылку</p>
                <div>
                    <input placeholder="example@mail.ru" type="text">
                    <button>Подписаться</button>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <div class="footer">
            <div class="container">
                <div class="footer__sections">
                    <div class="footer__first">
                        <h3>Студентам</h3>
                        <h4><a href="#">Как стать членом нашей команды</a></h4>
                        <h4><a href="#">Города</a></h4>
                        <h4><a href="#">Обратная связь</a></h4>
                        <h4><a href="#">Полезные ссылки</a></h4>
                    </div>
                    <div class="footer__first">
                        <h3>Сотрудничество</h3>
                        <h4><a href="#">Как стать партнером</a></h4>
                        <h4><a href="#">Документация</a></h4>
                        <h4><a href="#">Личный кабинет </a></h4>
                        <h4><a href="#">Правила</a></h4>
                    </div>
                    <div class="footer__first">
                        <h3>О проекте</h3>
                        <h4><a href="#">Документация</a></h4>
                        <h4><a href="#">Вакансии</a></h4>
                        <h4><a href="#">Обратная связь</a></h4>
                        <h4><a href="#">Наши преимущества</a></h4>
                    </div>
                    <div class="footer__second">
                        <h1>8-800-000-00-00 </h1>
                        <h2>с 8:00 до 23:00</h2>
                        <p>Звонок по РФ бесплатный</p>
                        <div>
                            <a href="#">VK</a>
                            <a href="#">Telegram</a>
                            <a href="#">Instagram</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="/ustumsuufinal/public/jquery-3.6.4.min.js"></script>
    <script src="/ustumsuufinal/public/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
