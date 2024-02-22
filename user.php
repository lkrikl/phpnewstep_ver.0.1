<!DOCTYPE html>
<html>
    <head>
        <title>Тестируем PHP на прочность :)</title>
    </head>
    <body>
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
	<hr><a href="/phpnewstep">Вернуться к вводу данных</a>
    </body>
</html>


