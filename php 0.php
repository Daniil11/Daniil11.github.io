<h3>Задание: </h3>
<p>Дано натуральное число n. Вычислить: 1^1 + 2^2 + .. + n^n. Вывести на экран квадраты этих чисел, а также сумму квадратов этих чисел.</p>
<h3>Решение: </h3>
<form name="Form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">	<!--форма ввода-->			
Введите n <input type="text" name="n">
<input type="submit">                   
</form>

<?php 
$a = $_GET['n'];						//берем данные из формы
$i = 1;									//число, возводимое в квадрат
$b = 0;									//переменная для записи квадратов чисел
$c = 0;									//переменная для суммы квадратов чисел

while ($i<=$a) {						//пока i меньше нашего n
	$b = $i*$i;							//возводим в квадрат
	echo $i,"<sup>2</sup>= ",$b,"<br>";	//выводим число и чему равен его квадрат
	$i++;								//следующее число
	$c+=$b;								//плюсуем квадрат к сумме
}

echo "<b>Сумма квадратов = </b>",$c			//выводим сумму квадратов
?>