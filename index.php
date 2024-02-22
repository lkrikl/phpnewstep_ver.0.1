<!DOCTYPE html>
<html>
    <head>
        <title>Тестируем PHP на прочность :)</title>
    </head>
    <body>
        <?php echo '<p>Привет, мир! Новый заход</p>'; ?>
		
		<h3>Форма ввода данных</h3>
			<form action="user.php" method="POST">
			<p>Имя: <input type="text" name="name" /></p>
			<p>Фамилия: <input type="text" name="lastname"></p>
			<p>Возраст: <input type="number" name="age" /></p>
			<input type="submit" value="Отправить"><hr>
    </body>
</html>