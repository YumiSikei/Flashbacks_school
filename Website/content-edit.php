<!DOCTYPE html>
<html> <!-- ������ HTML ��������� -->

<head>
<title>��������� ��������</title>
<meta charset="Windows-1251"> <!-- ���������
��������� �������� utf-8 -->
<link rel="stylesheet" type="text/css" href="css/style.css" media="all" /> <!-- ����������� css 
����� ������ style.css -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="all" />
<meta name="author" content="������� ���" /> <!-- ���������
��������� ����� -->
<!-- ��������� ���������� � ��������� -->
<link href='http://fonts.googleapis.com/css?family=Philosopher:400,700,700italic&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lobster&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Neucha&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
</head>

<body> <!-- ���� ��������� -->
<!-- ������ ��������� -->
<!-- ����� navbar-fixed-top ��������� �� ��, ��� ������ ��������� ������ ��������� ������ ��������
-->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
<!-- ����� container ������������ ������ ������ ��������� -->
<div class="container">
<!-- ������ ��� ��������� ����, ������� �������� �� ����������� � ��������� ������� �
�������� ����� -->
<div class="navbar-header">
<!-- ������ ������� �������� �� ����������� � ��������� ������� -->
<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bsexample-navbar-collapse-1">
<span class="sr-only">������ ��� ���������� ���� �� ��������� �����������</span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</button>
<!-- ������ � ��������� ����� -->
<a class="navbar-brand" href="/">������</a>
</div>
<!-- ���� (���, ��� ��������� � ���� ����� ����� ������ �� ����������� � ��������� �������
� ����� �������� ������ ����� ������� �� ��������������� ������) -->
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!-- ������ ���� -->
<ul class="nav navbar-nav">
<!-- ������ ����� ���� -->
<li class="active"><a href="#">������ 1</a></li>
<!-- ������ ����� ���� -->
<li><a href="#">������ 2</a></li>
<!-- ������ ����� ���� -->
<!-- ����� active ��������� �� ��, ��� � ������ ������ ������ ������ ���� ����� -->
<li><a href="#">������ 3</a></li>
<!-- ��������� ����� ���� -->
<!-- ����� ���������� ������������ ��� ������� ���� � ���������� ������� -->
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">������ 4</a>
<!-- ���������� ������ � ���������� ������ ���� -->
<ul class="dropdown-menu">
<!-- ������ �������� -->
<li><a href="#">������ 4-1</a></li>
<!-- ������ �������� -->
<li><a href="#">������ 4-2</a></li>
<!-- ����������� -->
<li class="divider"></li>
<!-- ������ �������� -->
<li><a href="#">������ 4-3</a></li>
<!-- ����������� -->
<li class="divider"></li>
<!-- ��������� �������� -->
<li><a href="#">������ 4-4</a></li>
</ul>
</li>
</ul>
<!-- ������ ���� -->
<!-- ����� navbar-right ��������� �� ��, ��� ���� ����� ��������� �� ������� ���� -->
<ul class="nav navbar-nav navbar-right">
<li><a href="#">������ 5</a></li>
</ul>
</div>
</div>
</nav>
<!-- ���� ��� "����� �����" -->
<header>
    <!-- ����� container ������������ ������ �������� -->
    <div class="container">
        <!-- ������ ����� �� �������� -->
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- ���������� ������� -->
            <!-- ���������� ������� ������ ��������� � ����������� �������, � ������ ������� �� 3 -->
            <!-- ����� active ������������� ���� ������, � ������� ���������� �������� -->
            <!-- �������� data-target � ������� ������ ��������������� ��������������(id) ����� �� ��������(������ �������) -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- ���� � ������� ��������� ������ -->
            <!-- ���������� ������� ����� ���� �����, � ������ ������� �� 3 -->
            <!-- ����� active ������������� ���� ������, � �������� ���������� �������� -->
            <div class="carousel-inner">
                <!-- ����� 1 -->
                <div class="item active">
                    <!-- ����������� ������ -->
                    <!-- � ���� src ����� �������� ����� �������� -->
                    <!-- � ���� alt ����� �������� �������� �������� -->
                    <img src="img/delphi.png" alt="������ ��������">
                    <!-- ����� ������ ����������� -->
                    <!-- ���� ����� �� ����� ������� �������� ���� ���� ������, �� �� ������� ��� -->
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <!-- ����� 2 -->
                <div class="item">
                    <!-- ����������� ������ -->
                    <!-- � ���� src ����� �������� ����� �������� -->
                    <!-- � ���� alt ����� �������� �������� �������� -->
                    <img src="img/Delphi-XE5-Android_final_by_dromcz.jpg" alt="������ ��������">
                    <!-- ����� ������ ����������� -->
                    <!-- ���� ����� �� ����� ������� �������� ���� ���� ������, �� �� ������� ��� -->
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                <!-- ����� 3 -->
                <div class="item">
                    <!-- ����������� ������ -->
                    <!-- � ���� src ����� �������� ����� �������� -->
                    <!-- � ���� alt ����� �������� �������� �������� -->
                    <img src="img/delphi awards.jpg" alt="������ ��������">
                    <!-- ����� ������ ����������� -->
                    <!-- ���� ����� �� ����� ������� �������� ���� ���� ������, �� �� ������� ��� -->
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
            </div>

            <!-- ������ ���������� �������� (������� ����� � ������) -->
            <!-- �������� href � ������ ������ ��������������� ��������������(id) ����� �� ��������(������ �������) -->
            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <!-- �������� href � ������ ������ ��������������� ��������������(id) ����� �� ��������(������ �������) -->
            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
    </div>
</header>
<article> 
 <?php 
require_once 'login.php';
$link = mysqli_connect($host, $user, $password, $db);

/* �������� ����������� */
if (mysqli_connect_errno()) {
printf("�� ������� ������������: %s\n", mysqli_connect_error());
exit();
}

if (!$link->set_charset("utf8")) {
printf("������ ��� �������� ������ �������� utf8: %s\n", $link->error);
}
 

$query = "SELECT * FROM  `content` WHERE  `Id` =1";
$result = mysqli_query($link, $query);

/* ������������� ������ */
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

echo
'<form class="form-inline" role="form" action="update-edit.php" method="get">
<input type="hidden" name="id" value="'.$row['Id'].'">
<p>��������� ���������</p><br />
<input type="text" size="50" name="title" value="'.$row['title'].'">
<br />
<p>����� ���������</p><br />
<textarea rows="8" cols="53" name="content">'.$row['content'].'</textarea>
<br/>
<button type="submits" class="btnbtn-success">���������</button>
</form>';

/* ������� ���������� ������� */
mysqli_free_result($result);

/* ��������� ����������� */
mysqli_close($link);
?>
</article>
<footer> <!-- "������" �����: ���������, �������� � �.�. -->
</footer>
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>

</html>