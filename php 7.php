<h3>Задание: </h3>
<p> Есть массив чисел (целые, и положительные и отрицательные)
 [-333, 152,0,23, 24, -123, 52, -255 ...]
 Необходимо найти индексы, сумма элементов между которыми будет максимальна
 Например тут : 1 4 , 152 + 0 + 23 + 24 = 199</p>
<h3>Решение: </h3>

<?php
	for ($i = 0;$i<10;$i++){						//генерируем массив
		$arr[$i] = rand(-10,10);					
	}
	
	echo "Сгенерированный мaccив: ";			//выводим массив
	for ($i=0;$i<=10;$i++){
	echo $arr[$i]," ";
	}
	
	$a=0;										//переменная индекса начала
	$b=0;										//переменная индекса конца
	$c=0;										//переменная для набора суммы
	$n=0;										//переменная для макс. суммы
	$d=0;										//переменная начала вложенного цикла
	
	for ($i=0;$i<=10;$i++){						//перебор массива от 0 элемента до 9, затем от 1 до 9, 2 до 9 и т.д.
		for ($e=$d;$e<=10;$e++){					//вложенный цикл
			$c+=$arr[$e];						//набираем сумму
			if ($c>$n) {						//если эта сумма стала больше максимальной
				$n=$c;							//присваеваем максимальной сумме набранную
				$a = $i;						//индекс начала сложения 
				$b = $e;						//индекс конца сложения
			}
			
		}
		$c=0;									//обнуляем сумму после того как приступили к другой комбинации
		$d++;									//сдвигаем начало вложенного цикла на элемент вперед
	}
	
	echo "<br>";
	echo "Мaкс. суммa: ",$n;					//выводим макс. сумму
	echo "<br>";
	echo "Индексы: с ",$a," по ",$b;					//выводим индексы
?>