<h3>Задание: </h3>
<p>Вам нужно разработать программу, которая считала бы количество вхождений какой-нибуть выбранной вами цифры в выбранном вами числе. Например: цифра 5 в числе 442158755745 встречается 4 раза</p>
<h3>Решение: </h3>
<form name="Form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">	<!--форма ввода-->			
Введите число: <input type="text" name="n"> 
<br>
Введите искомую цифру: <input type="text" name="v">
<br>
<input type="submit">                   
</form>
<?php
	$a = $_GET['n'];						//берем данные из формы
	$b = $_GET['v'];						//берем данные из формы
	$c = 0;									//переменная для счета количества вхождений
	for ($i=0;$i<strlen($a);$i++){			//перебираем число 
		if ($a[$i]==$b){					//если цифра числа равна искомой цифре 
			$c++;							//прибавляем счетчик
		}
	}
	echo "Число вхождений цифры ",$b," в число ",$a," = ",$c;	//выводим количество вхождений
?>