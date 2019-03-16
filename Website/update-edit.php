<!DOCTYPE html>
<html>
    <head>
<meta charset="utf-8">
<meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE">
	</head>
<body>
<?php 
require_once 'login.php';
$link=mysqli_connect($host, $user, $password, $db);
	
/* проверка подключения */
if (mysqli_connect_errno()) {
printf("Не удалось подключиться: %s\n", mysqli_connect_error());
exit();}

/* установка кодировки utf8 */
if (!$link->set_charset("utf8")) {
printf("Ошибка при загрузке набора символов utf8: %s\n", $link->error);}

/* забираем данные из формы */
$title=$_REQUEST['title'];
$content=$_REQUEST['content'];
$Id=$_REQUEST['Id'];
$date("m.d.y");

/* подготавливаем запрос к БД */
$update_sql = "UPDATE `content` SET  `title` = '$title', `content` = '$content', `Date create` = '$date' WHERE `Id` = '$Id'";

/* отправляем запрос к БД */
mysqli_query($link, $update_sql) or die("Ошибка: " . mysql_error());
echo '<p>Запись успешно обновлена!</p>';
echo '<a href = "index.php"> Назад </a>';
	
	
/* закрываем подключение */
mysqli_close($link);
?>

</body>
</html>