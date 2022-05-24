<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>NEWSproject</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">


    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">   

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
<!-- Navbar  -->
<?php require "block/navbar.php" ?>

<div class="container-fluid py-3">
        <!-- Carusel -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="owl-carousel owl-carousel-2 carousel-item-1 position-relative mb-3 mb-lg-0">

                        <div class="position-relative overflow-hidden" style="height: 435px;">
                            <img class="img-fluid h-100" src="img/sport.jpg" style="object-fit: cover;">
                            <div class="overlay">
                                <div class="mb-1">
                                    <a class="text-white" href="sport.html">Спорт</a>
                                    <span class="px-2 text-white">/</span>
                                    <a class="text-white" href="sport.html">20.05.2022</a>
                                </div>
                                <a class="h2 m-0 text-white font-weight-bold" href="sport.html">Тренер олимпийской сборной по борьбе.</a>
                            </div>
                        </div>

                        <div class="position-relative overflow-hidden" style="height: 435px;">
                          <img class="img-fluid h-100" src="img/politic.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-1">
                                  <a class="text-white" href="politic.html">Политика</a>
                                  <span class="px-2 text-white">/</span>
                                  <a class="text-white" href="#">20.05.2022</a>
                              </div>
                              <a class="h2 m-0 text-white font-weight-bold" href="politic.html">Шавкат Мирзиёев вылетел в ОАЭ.</a>
                          </div>
                        </div>

                        <div class="position-relative overflow-hidden" style="height: 435px;">
                          <img class="img-fluid h-100" src="img/kino.jpg" style="object-fit: cover;">
                          <div class="overlay">
                              <div class="mb-1">
                                  <a class="text-white" href="kino.html">Кино</a>
                                  <span class="px-2 text-white">/</span>
                                  <a class="text-white" href="#">20.05.2022</a>
                              </div>
                              <a class="h2 m-0 text-white font-weight-bold" href="kino.html">В Ташкенте стартовали Дни белорусского кино.</a>
                          </div>
                        </div>

                        <div class="position-relative overflow-hidden" style="height: 435px;">
                        <img class="img-fluid h-100" src="img/texno.jpg" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-1">
                                <a class="text-white" href="tehno.html">Технологии</a>
                                <span class="px-2 text-white">/</span>
                                <a class="text-white" href="#">20.05.2022</a>
                            </div>
                            <a class="h2 m-0 text-white font-weight-bold" href="tehno.html">Fergana Global Textile: новые технологии и инновации</a>
                        </div>
                        </div>

                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Featured  -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="fon d-flex align-items-center justify-content-between py-2 px-4 mb-3">
                <h3 class="text-light m-0">Избранное</h3>
                <a class="text-secondary font-weight-medium text-decoration-none" href="">Показать все</a>
            </div>
            <div class="owl-carousel owl-carousel-2 carousel-item-4 position-relative">
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="img/texno.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="tehno.html">Технологии</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="#">17.05.2022</a>
                        </div>
                        <a class="h4 m-0 text-white" href="tehno.html">Fergana Global Textile</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="img/travel.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="travel.html">Путешествие</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="#">15.05.2022</a>
                        </div>
                        <a class="h4 m-0 text-white" href="travel.html">«Путешествую без COVID-19»</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="img/politic.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="politic.html">Политика</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="#">18.05.2022</a>
                        </div>
                        <a class="h4 m-0 text-white" href="politic.html">Шавкат Мирзиёев вылетел в ОАЭ</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="img/econom.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="econom.html">Экономика</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="#">18.05.2022</a>
                        </div>
                        <a class="h4 m-0 text-white" href="econom.html">Замглавы ЦБ — о том, как внешние риски</a>
                    </div>
                </div>
                <div class="position-relative overflow-hidden" style="height: 300px;">
                    <img class="img-fluid w-100 h-100" src="img/news-300x300-5.jpg" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-1" style="font-size: 13px;">
                            <a class="text-white" href="kino.html">Кино</a>
                            <span class="px-1 text-white">/</span>
                            <a class="text-white" href="#">16.05.2022</a>
                        </div>
                        <a class="h4 m-0 text-white" href="kino.html">Sanctus amet sed ipsum lorem</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--  Sidebar -->
    <div class="container-fluid py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="fon d-flex align-items-center justify-content-between py-2 px-4 mb-3">
                                <h3 class="text-light m-0">Популярные</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="#">Показать все</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/texno.jpg" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="#">Технологии</a>
                                        <span class="px-1">/</span>
                                        <span>08.09.2022</span>
                                    </div>
                                    <a class="h4" href="tehno.html">Fergana Global Textile: новые технологии и инновации</a>
                                    <p class="m-0">екстильная компания Global Textile Group открыла фабрику в Фергане, которая будет выпускать 13 тысяч тонн пряжи и 9 млн метров готовой ткани</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/sport.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="sport.html">Спорт</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="sport.html">Tренер олимпийской сборной по борьбе</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/travel.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="travel.html">Путешествие</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="travel.html">Узбекистан присоединился к приложению «Путешествую без COVID-19</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/econom.jpg" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="econom.html">Экономика</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h4" href="econom.html">Замглавы ЦБ — о том, как внешние риски и шоки повлияют на экономику Узбекистана</a>
                                    <p class="m-0">Заместитель главы Центробанка Бехзод Хамраев сообщил, что последние события в мире будут оказывать негативное влияние</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/kino.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="kino.html">Кино</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="kino.html">В Ташкенте стартовали Дни белорусского кино</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/politic.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="politic.html">Политика</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="politic.html">Шавкат Мирзиёев вылетел в ОАЭ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    
                    <div class="row">
                        <div class="col-12">
                            <div class=" fon d-flex align-items-center justify-content-between bg-light py-2 px-4 mb-3">
                                <h3 class="text-light m-0">Сегодня</h3>
                                <a class="text-secondary font-weight-medium text-decoration-none" href="#">Показать все</a>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/texno.jpg" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="tehno.html">Технологии</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h4" href="tehno.html">Fergana Global Textile: новые технологии и инновации</a>
                                    <p class="m-0">Текстильная компания Global Textile Group открыла фабрику в Фергане, которая будет выпускать 13 тысяч тонн пряжи и 9 млн метров готовой ткани.</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/sport.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="sport.html">Спорт</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="">Tренер олимпийской сборной по борьбе</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/kino.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="kino.html">Кино</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="kino.html">В Ташкенте стартовали Дни белорусского кино</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="position-relative mb-3">
                                <img class="img-fluid w-100" src="img/econom.jpg" style="object-fit: cover;">
                                <div class="overlay position-relative bg-light">
                                    <div class="mb-2" style="font-size: 14px;">
                                        <a href="econom.html">Экономика</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h4" href="">Замглавы ЦБ — о том, как внешние риски и шоки повлияют на экономику Узбекистана</a>
                                    <p class="m-0">Заместитель главы Центробанка Бехзод Хамраев сообщил, что последние события в мире будут оказывать негативное влияние</p>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/travel.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="travel.html">Путешествие</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="">Узбекистан присоединился к приложению «Путешествую без COVID-19»</a>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <img src="img/politic.jpg" style="width: 100px; height: 100px; object-fit: cover;">
                                <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                                    <div class="mb-1" style="font-size: 13px;">
                                        <a href="politic.html">Политика</a>
                                        <span class="px-1">/</span>
                                        <span>06.09.2022</span>
                                    </div>
                                    <a class="h6 m-0" href="">Шавкат Мирзиёев вылетел в ОАЭ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<?php require "block/sidebarindex.php"?>
            </div>
        </div>
    </div>
    </div>



<?php require "block/footer.php"?>







    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>