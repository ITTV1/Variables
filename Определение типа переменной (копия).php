

Установка типа переменной


settype($var, $type)
floatval($var)
intval($var[, $base])

echo intval('42');// 42
echo intval('42', 8); // 34


Операция преобразования Описание
(int)
(integer) Приведение к целому типу
(bool)
(boolean) Приведение к логическому типу
(float)
(double)
(real) Приведение к вещественному типу
(string) Приведение к строке
(array) Приведение к массиву
(object) Приведение к объекту
(unset) Приведение к null







$value = 3.14;
echo (int)$value . " (" . gettype((int)$value) . ")";
// 3 (integer)
echo (string)$value . " (" . gettype((string)$value) . ")";
// 3.14 (string)
echo (boolean)$value . " (" . gettype((boolean)$value) . ")"; // 1 (boolean)
