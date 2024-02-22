<!DOCTYPE html>
<html>
    <head>
        <title>Тестируем PHP на прочность :)</title>
    </head>
    <body>
        <?php echo '<p>Привет, мир! Новый заход</p>'; ?>
		
		<h3>Форма ввода данных</h3>
			<form action="index.php" method="POST">
			<p>Имя: <input type="text" name="name" /></p>
			<p>Фамилия: <input type="text" name="lastname"></p>
			<p>Возраст: <input type="number" name="age" /></p>
			<input type="submit" value="Отправить"><hr>
<?php
$name = "не определено";
$lastname = "Не определено";
$age = "не определен";
if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["lastname"])){
	$lastname = $_POST["lastname"];
}
if(isset($_POST["age"])){
    $age = $_POST["age"];
}
echo "Имя: $name <br> Фамилия: $lastname <br> Возраст: $age";
?>
    </body>
</html>