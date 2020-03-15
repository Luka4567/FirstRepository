<?php
//присвоюємо змінній а- html форму
$a=<<<HD
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
	<form action="{$_SERVER['PHP_SELF']}" method="POST">
		<input type="submit" value="Камінь" name="k">
		<input type="submit" value="Ножниці" name="n">
		<input type="submit" value="Папір" name="p">
	</form>
	
</body>
</html>
HD;
if(isset($_POST["k"])){// якщо була натиснена кнопка з написом Камінь то виконуємо наступні дії
	$q=rand(1,3);//рандомізуємо випадкове число від одного до трьох включно серед яких 1 відповідає за камінь 2 за ножниці і 3 за папір

	if($q==1){//відповідно якщо користувач натиснув на кнопку з написом Камінь то ми порівнюємо його 1 з тим що видав компютер і при співпадінні виводимо на екран результат
		echo "Нічия.";
	}
	elseif($q==2){
		echo "Ви перемогли!";
	}
	else {
		echo "ви програли :(";
	}
}
elseif(isset($_POST["n"])){// подібні дії виконуємо для кожної кнопки
	$i=rand(1,3);
	if($i==1){
		echo "Bи програли :(";
	}
	elseif($i==2){
		echo "Нічия.";
	}
	else {
		echo "Ви перемогли!";
	}
}
elseif(isset($_POST["p"])){
	$i=rand(1,3);
	if($i==1){
		echo "Ви перемогли!";
	}
	elseif($i==2){
		echo "Bи програли :(";
	}
	else {
		echo "Нічия.";
	}
}
else{//якщо не була натиснена ні одна кнопка то виводимо на екран форму з кнопками
  echo $a;
}
?>