<h3>Задание: </h3>
<p>Ваше задание — создать массив, наполнить его случайными значениями (можно использовать функцию rand), найти максимальное и минимальное значение массива и вывести индексы этих чисел.</p>
<h3>Решение: </h3>
<form name="Form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">	 <!--форма ввода-->			
Введите размер массива: <input type="text" name="n">
<input type="submit">                  
</form>
<?php
	$n = $_GET['n'];												//берем данные из формы
	$arr = array();													//инициализация массива
	$max = 0;														//
	$min = 10;														//
	$indexM = 0;													//
	$indexMin = 0;													//
	for ($i = 0;$i<$n;$i++){										//начинаем присваивать массиву значения
		$arr[$i] = rand(-10,10);									//генерируем значение и присваеваем элементу массива
	}
	echo 'Сгенерированный массив: <br>';
	print_r($arr);													//выводим сгенерированный массив
	
	for ($i = 0;$i<$n;$i++){											//перебор массива
	
		if ($arr[$i]>$max){												//если элемент больше текущего большего значения то 
				$max = $arr[$i];										//присваеваем большему значению значение элемента
				$indexM = $i;											//присваеваем индекс большего элемента
			}				
			if($arr[$i]<$min){											//если элемент больше текущего меньшего значения то 
				$min = $arr[$i];										//присваеваем меньшему значению значение элемента
				$indexMin = $i;											//присваеваем индекс меньшего элемента
			}
	}
	
	echo "<br>";
	echo "Макс. значение = ",$max," Индекс = ",$indexM;			//выводим макс значение и его индекс
	echo "<br>";
	echo "Мин. значение = ",$min," Индекс = ",$indexMin;			//выводим мин значение и его индекс
?>