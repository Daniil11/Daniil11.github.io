<h3>Задание: </h3>
<p>Вам нужно разработать программу, которая определяет, является ли число N простым. Простое число делится само на себя и на единицу.</p>
<h3>Решение: </h3>

<form name="authForm" method="GET" action="<?=$_SERVER['PHP_SELF']?>">		<!--форма ввода-->			
Введите число n: <input type="text" name="n">
<input type="submit" name="button">                   
</form>
<?php
	if( isset( $_GET['button'] ) )					//если кнопка нажата, исполняем код
    {
		$a = $_GET['n'];							//берем данные из формы
		$n = 0;										//переменная которая показывает составное ли число
		for($x=2; $x <= sqrt($a); $x++) {			//перебираем все значения от 2 до квадрата введеного числа
			if($a % $x == 0) {						//если число делится без остатка то число составное
				echo "Число составное";				//выводим ответ
				$n=1;								//меняем значение переключателя
				break;								//выходим из цикла
			}
		}	
		if ($n == 0){								//если n так и осталась единицой то число простое
		echo "Число простое";						//выводим ответ
		}
	}
?>