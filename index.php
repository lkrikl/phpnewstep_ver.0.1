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
			<p>Возраст: <input type="number" name="age" /></p>
			<input type="submit" value="Отправить"><hr>
<?php
$name = "не определено";
$age = "не определен";
if(isset($_POST["name"])){
    $name = $_POST["name"];
}
if(isset($_POST["age"])){
    $age = $_POST["age"];
}
echo "Имя: $name <br> Возраст: $age";
?>
    </body>
</html>