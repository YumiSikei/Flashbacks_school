<!DOCTYPE html>
<html> <!-- Начало HTML документа -->

<head>
<title>Заголовок страницы</title>
<meta charset="Windows-1251"> <!-- Установка
кодировки страницы utf-8 -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" /> <!-- Подключение css 
файла стилей style.css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
<meta name="author" content="Фамилия Имя" /> <!-- Указываем
владельца сайта -->
<!-- Служебная информация о документе -->
<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Neucha&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>

<body> <!-- Тело документа -->
<!-- Панель навигации -->
<!-- Класс navbar-fixed-top указывает на то, что панель навигации всегда находится сверху страницы
-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<!-- Класс container ограничивает ширину панели навигации -->
<div class="container">
<!-- Кнопка для раскрытия меню, которая появится на устройствах с маленьким экраном и
название сайта -->
<div class="navbar-header">
<!-- Кнопка которая появится на устройствах с маленьким экраном -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bsexample-navbar-collapse-1">
<span class="sr-only">Кнопка для управления меню на мобильных устройствах</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!-- Ссылка с названием сайта -->
<a class="navbar-brand" href="/">Пример</a>
</div>
<!-- Меню (все, что находится в этом блоке будет скрыто на устройствах с маленьким экраном
и будет показано только после нажатия на соответствующую кнопку) -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!-- Первое меню -->
<ul class="nav navbar-nav">
<!-- Первый пункт меню -->
<li class="active"><a href="#">Ссылка 1</a></li>
<!-- Второй пункт меню -->
<li><a href="#">Ссылка 2</a></li>
<!-- Третий пункт меню -->
<!-- Класс active указывает на то, что в данный момент выбран именно этот пункт -->
<li><a href="#">Ссылка 3</a></li>
<!-- Четвертый пункт меню -->
<!-- Такое оформление используется для пунктов меню с выпадающим списком -->
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Ссылка 4</a>
<!-- Выпадающий список у четвертого пункта меню -->
<ul class="dropdown-menu">
<!-- Первый подпункт -->
<li><a href="#">Ссылка 4-1</a></li>
<!-- Второй подпункт -->
<li><a href="#">Ссылка 4-2</a></li>
<!-- Разделитель -->
<li class="divider"></li>
<!-- Третий подпункт -->
<li><a href="#">Ссылка 4-3</a></li>
<!-- Разделитель -->
<li class="divider"></li>
<!-- Четвертый подпункт -->
<li><a href="#">Ссылка 4-4</a></li>
</ul>
</li>
</ul>
<!-- Второе меню -->
<!-- Класс navbar-right указывает на то, что меню будет выравнено по правому краю -->
<ul class="nav navbar-nav navbar-right">
<li><a href="#">Ссылка 5</a></li>
</ul>
</div>
</div>
</nav>
<!-- Блок для "Шапки сайта" -->
<header>
    <!-- Класс container ограничивает ширину слайдшоу -->
    <div class="container">
        <!-- Начало блока со слайдшоу -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Индикаторы слайдов -->
            <!-- Количество пунктов должно совпадать с количеством слайдов, в данном примере их 3 -->
            <!-- Класс active присваивается тому слайду, с котрого начинается слайдшоу -->
            <!-- Значение data-target у пунктов должно соответствовать идентификатору(id) блока со слайдшоу(первая строчка) -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Блок в котором находятся слайды -->
            <!-- Количество слайдов может быть любым, в данном примере их 3 -->
            <!-- Класс active присваивается тому слайду, с которого начинается слайдшоу -->
            <div class="carousel-inner">
                <!-- Слайд 1 -->
                <div class="item active">
                    <!-- Изображение слайда -->
                    <!-- В поле src нужно написать адрес картинки -->
                    <!-- В поле alt нужно написать название картинки -->
                    <img src="img/delphi.png" alt="Первая картинка">
                    <!-- Текст поверх изображения -->
                    <!-- Если текст не нужен следует оставить этот блок пустым, но не удалять его -->
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <!-- Слайд 2 -->
                <div class="item">
                    <!-- Изображение слайда -->
                    <!-- В поле src нужно написать адрес картинки -->
                    <!-- В поле alt нужно написать название картинки -->
                    <img src="img/Delphi-XE5-Android_final_by_dromcz.jpg" alt="Вторая картинка">
                    <!-- Текст поверх изображения -->
                    <!-- Если текст не нужен следует оставить этот блок пустым, но не удалять его -->
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <!-- Слайд 3 -->
                <div class="item">
                    <!-- Изображение слайда -->
                    <!-- В поле src нужно написать адрес картинки -->
                    <!-- В поле alt нужно написать название картинки -->
                    <img src="img/delphi awards.jpg" alt="Третья картинка">
                    <!-- Текст поверх изображения -->
                    <!-- Если текст не нужен следует оставить этот блок пустым, но не удалять его -->
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- Кнопки управления слайдщоу (стрелки влево и вправо) -->
            <!-- Значение href у ссылки должно соответствовать идентификатору(id) блока со слайдшоу(первая строчка) -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <!-- Значение href у ссылки должно соответствовать идентификатору(id) блока со слайдшоу(первая строчка) -->
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</header>
<article> 
<h1 class="p">    Заголовок 1 (36px)</h1>
  Абзац 1  
  <img src="img/2010_04_05_11_01_188190608.jpg" alt="Kартинка">
<h2 class="n">    Заголовок 2 (30px.)</h2>
  Абзац 2  
  <img src="img/x_f3af22b9.jpg" alt="Img">
<h3 class="l">    Заголовок 3 (24px.)</h3>
<small>: <h5>   Пример заголовка <small>подзаголовок</small></h5>  
  <img src="img/Programming.jpg" alt="Imgimg">
  Абзац 3

  <?php 
require_once 'login.php';
$link = mysqli_connect($host, $user, $password, $db);

/* проверка подключения */
if (mysqli_connect_errno()) {
printf("Не удалось подключиться: %s\n", mysqli_connect_error());
exit();
}

if (!$link->set_charset("utf8")) {
printf("Ошибка при загрузке набора символов utf8: %s\n", $link->error);
}
 

$query = "SELECT * FROM  `content` WHERE  `Id` =1";
$result = mysqli_query($link, $query);

/* ассоциативный массив */
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC));
{echo '<br />';
echo $row['title'];
echo '<br />';
echo $row['content'];
echo '<br />';
echo $row['Date create'];
echo	'
<form	class="form-inline"	role="form"	action="content-edit.php"	
method="get">
<input	type="hidden"	name="id"	value="'.$row['Id'].'">
<button	type="submits"	class="btn	btndefault">Редактировать</button>
</form>';
}

/* ************************ */
/* очищаем результаты выборки */
mysqli_free_result($result);

/* закрываем подключение */
mysqli_close($link);
?>
</article>
<footer> <!-- "Подвал" сайта: копирайты, счётчики и т.д. -->
</footer>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>