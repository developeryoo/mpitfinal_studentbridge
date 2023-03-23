<?php 
	$conn = mysqli_connect('localhost', 'root','', 'studentbridge');
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
        <header class="header">
            <a class="header__logo" href="#"><img src="img/logo.png" alt=""></a>
            <nav class="navbar">
                <ul class="navbar__ul">
                    <li class="navbar__li"><a href="index.html">Главная</a></li>
                    <li class="navbar__li"><a href="#">Мероприятия</a></li>
                    <li class="navbar__li"><a href="#">Сообщества</a></li>
                    <li class="navbar__li"><a href="#">Вебинары</a></li>
                    <li class="navbar__li"><a href="#">Петиции</a></li>
                    <li class="navbar__li"><a href="#">Контакты</a></li>
                    <li class="navbar__li"><a href="#">О нас</a></li>
                </ul>
            </nav>

            <button class="header__button">
                <a href="#">Логин</a>
            </button>
        </header>
    </div>



    <section class="section">
        <div class="container">
            <div class="section__title">
                <h1>Новости</h1>
                <a href="more_news_add.php">Добавить новость</a>
            </div>

            <?php
                $query = "SELECT * FROM `posts` ORDER BY posts.id DESC";
                $result = mysqli_query($conn,$query);
                while($row = mysqli_fetch_array($result)) {
            ?>
            <div class="newsall__block">
                <div class="newsall__left">
                    <img src="<? echo $row[1]; ?>" alt="">
                </div>
                <div class="newsall__right">
                    <h1 class="newsall__right__title"><? echo $row[2]; ?></h1>
                    <p class="newsall__right__text"><? echo $row[3]; ?></p>
                </div>
            </div>

            <?php
                }
            ?>
        </div>
    </section>




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







    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>