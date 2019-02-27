<h3>Задание: </h3>
<p>Ваше задание будет создание сокращенного варианта ФИО, т. е.
 вводим: Иванов Иван Петрович и нам выводит: Иванов И. П.</p>
<h3>Решение: </h3>

<form name="Form" method="GET" action="<?=$_SERVER['PHP_SELF']?>">	<!--форма ввода-->			
Введите ФИО:<input type="text" name="a">
<input type="submit" name="button">                   
</form>

<?php
if( isset( $_GET['button'] ) )			//если кнопка нажата, исполняем код
    {
		$a = $_GET['a'];				//берем данные из формы
		$d = stripos($a," ");			//ищем фамилию
		echo substr($a,0,$d),substr($a,stripos($a," "),3),'.',substr($a,stripos($a," ",$d+3),3),'.';		//обрезаем и вывводим инициалы
	}
?>