<?php 
    session_start();
    if (!$_SESSION['user']) {
        header('Location: /ustumsuufinal/login.php');
    }
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
                <a href="/ustumsuufinal/vendor/login.php"><?= $_SESSION['user']['login'] ?></a>
                <a href="/ustumsuufinal/vendor/logout.php" class="logout">Выход</a>
            </button>
        </header>
    </div>

    
    <div class="intro">
        <div class="container intro__flex">
            <div class="intro__inner">
                <h1 class="intro__title">Мы работаем во имя <span>будущего</span></h1>
                <p class="intro__desc">Объединяем студентов из Якутии, которые учатся за пределами РС(Я)</p>
                <button class="intro__button">Мероприятия</button>
            </div>
            <div class="intro__inner__right">
                <img src="img/intro.png" alt="">
            </div>
        </div>
    </div>


    <section class="section">
        <div class="container">
            <div class="section__title">
                <h1>Новости</h1>
                <a href="more_news.php">Все новости</a>
            </div>
            <div class="section__news">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="img/c1.jpg" alt="First slide">
                        <div class="carousel-caption d-md-block">
                          <h5>Прошел крупнейший концерт этого года в Москве.</h5>
                          <p>Наши студенты приняли участие</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/c2.jpg" alt="Second slide">
                        <div class="carousel-caption d-md-block">
                          <h5>Музыкальный вечер</h5>
                          <p>Ул. Моряковская 45/2, Большой зал</p>
                        </div>
                      </div>
                      <div class="carousel-item">
                        <img class="d-block w-100" src="img/c3.jpg" alt="Third slide">
                        <div class="carousel-caption d-md-block">
                          <h5>Концерт KitJah, рэп, хип-хоп</h5>
                          <p>ул. Нарвская 26/2</p>
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="container">
            <div class="section__title">
                <h1>Мероприятия</h1>
                <a href="#">Все мероприятия</a>
            </div>
            <div class="section__events">
                <div class="section__bridge">
                    <img src="img/bridge.png" alt="">
                </div>
            </div>
        </div>
    </section>


    <section class="section">
        <div class="container">
            <div class="section__title">
                <h1>Наши активисты</h1>
                <a href="#">Все активисты</a>
            </div>
            <div class="section__activites">
                <div class="section__activist">
                    <h1 class="activist__title">Иван Иванов</h1>
                    <p>2 курс, МГУ, г. Москва</p>
                </div>
                <div class="section__activist">
                    <h1 class="activist__title">Иван Иванов</h1>
                    <p>2 курс, МГУ, г. Москва</p>
                </div>
                <div class="section__activist">
                    <h1 class="activist__title">Иван Иванов</h1>
                    <p>2 курс, МГУ, г. Москва</p>
                </div>
            </div>
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






    <script src="/ustumsuufinal/public/jquery-3.6.4.min.js"></script>
    <script src="/ustumsuufinal/public/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
