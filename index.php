<?php 

$pdo = new PDO("mysql:host = localhost;dbname=global","sarapulov","neto0982",[PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
$pdo->exec('SET NAMES utf8');
$sql = "SELECT name,author,year,isbn,genre FROM books";
$statement = $pdo->prepare($sql);
$statement->execute();	
?>
<!DOCTYPE html>
<html>
<head>
	<title>Вывод данных из таблицы</title>
</head>
<body>
<h2>Библиотека Успешного человека</h2>
<table border="1" >

		<td>Название</td>
		<td>Автор</td>
		<td>Год</td>
		<td>ISBN</td>
		<td>РУБРИКА</td>
 <?php foreach ($statement as  $rows): ?>
	<tr>
		<td><?=$rows['name']?></td>
		<td><?=$rows['author']?></td>
		<td><?=$rows['year']?></td>
		<td><?=$rows['isbn']?></td>
		<td><?=$rows['genre']?></td>
	</tr>
<?php endforeach;?>
	
</table>
</body>
</html>