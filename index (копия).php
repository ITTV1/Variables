Типы переменных

gettype($variable)

integer (целое число)
-9223372036854775807
9223372036854775807
3.231248 
0.00015
1.5 
<?php
echo PHP_INT_MAX; // 9223372036854775807
?>

double (вещественное число)



<?php
$x = 0.00012;
$y = 1.2e-4;
$x = 346.1256; 
$y = 3.461256e+2;
?>

<?php
echo 1.8e307; // 1.8E+307
echo 1.8e308; // INF
echo $var - 1.8e307; // INF
?>

<?php
echo sqrt(-1); // NAN
?>

string (строка текста)


array (ассоциативный массив)
// Создаст массив с ключами "0", "surname1" и "name"
$a = array(
0 => "Нулевой элемент",
"surname1" => "BOSS",
"name" => "PROGRAMMIST",
);
echo $a["surname"];
// выведет "BOSS"
$a["1"] = "Первый элемент"; // создаст элемент и присвоит ему значение
$a["name"] = "PROGRAMMIST";
// присвоит существующему элементу новое значение


object (ссылка на объект)
→


resource (ресурс)

imageCreate()


GD


boolean (логический тип)

false
true



null (специальное значение)
NULL


callable (функция обратного вызова)




