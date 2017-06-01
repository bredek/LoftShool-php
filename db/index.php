<?php
error_reporting(-1);

include 'funcs.php';

/* Практическая часть. Будем использовать mysqli
Удалить записи из таблицы
Подключиться к БД
Создать таблицу
Добавить записи в таблицу
Отобразить записи из таблицы
*/

$host = 'localhost';  // сервер
$base = 'mydatabase';  // имя базы данных
$user = 'root';  // пользователь
$pass = 'root';  // пароль 
//3306
$mysql = @new mysqli($host, $user, $pass, $base);
if(mysqli_connect_errno()){ die(mysqli_connect_error()); }

$sql = "set names 'utf8'";
$result = $mysql->query($sql); if (!$result) die($mysql->error);

$mysql->query("drop table `users`"); 

/* СОЗАДНИЕ ТАБЛИЦЫ ИЗ КОДА */
$sql1 = "
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `surname` tinytext,
  `patronymic` tinytext,
  `name` tinytext,
  `phone` varchar(12) DEFAULT NULL,
  `email` tinytext,
  `url` tinytext,
  `status` enum('active','passive','lock','gold') DEFAULT 'active'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";

$sql2 = "ALTER TABLE `users` ADD PRIMARY KEY (`id`);";
$sql3 = "ALTER TABLE `users` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;";

$result = $mysql->query($sql1); if (!$result) die($mysql->error);
$result = $mysql->query($sql2); if (!$result) die($mysql->error);
$result = $mysql->query($sql3); if (!$result) die($mysql->error);

echo 'Таблица создана!<br>';


/* ДОБАВЛЕНИЕ ЗАПИСИ В ТАБЛИЦУ */
$sql = "insert into `users` (`surname`, `patronymic`, `name`, `phone`, `email`, `url`, `status`) values
('Иванов',    'Валерьевич',    'Александр', '58-98-78',   'ivanov@email.ru',       NULL,                      'active'),
('Лосев',     'Иванович',      'Сергей',    '9057777777', 'losev@email.ru',        NULL,                      'passive'),
('Симдянов',  'Вячеславович',  'Игорь',     '9056666100', 'simdyanov@softtime.ru', 'http://www.softtime.ru/', 'active'),
('Кузнецов',  'Валерьевич',    'Максим',    NULL,         'kuznetsov@softtime.ru', 'http://www.softtime.ru',  'active'),
('Нехорошев', 'Юрьевич',       'Анатолий',  NULL,         NULL,                    NULL,                      'lock'),
('Корнеев',   'Александрович', 'Александр', '89-78-36',   'korneev@domen.ru',      NULL,                      'gold');";

$result = $mysql->query($sql); if (!$result) die($mysql->error);
echo 'Записи добавлены!<br>';

/* ОТОБРАЖЕНИЕ ЗАПИСЕЙ */
$sql = "select * from `users`"; //where `name` like 'а%' ";
$result = $mysql->query($sql); if (!$result) die($mysql->error);

$data = $result->fetch_all(MYSQLI_ASSOC);
if (count($data)) {
    // echo '<pre>'.print_r($data, true).'</pre>';
    echo drawTable($data);
} else {
    echo 'Таблица пустая!';
}

/* ОТОБРАЖЕНИЕ ЗАПИСЕЙ ЧЕРЕЗ ОБЪЕДИНЕНИЕ */
$sql = "
select u.*, s.statusname as status from users as u
left join statusname as s
on s.status = u.status
";
$result = $mysql->query($sql); if (!$result) die($mysql->error);

$data = $result->fetch_all(MYSQLI_ASSOC);
if (count($data)) {
    echo drawTable2($data);
} else {
    echo 'Таблица пустая!';
}

// /* УДАЛЕНИЕ ЗАПИСЕЙ */
// $sql = "delete from `users` where `id`='2' ";
// $result = $mysql->query($sql); if (!$result) die($mysql->error);
// // ОТОБРАЖАЕМ РЕЗУЛЬТАТ
// echo '<p>Результат удаление пользователя с ID = 2</p>';
// $sql = "select * from `users`";
// $result = $mysql->query($sql); if (!$result) die($mysql->error);
// $data = $result->fetch_all(MYSQLI_ASSOC); if (count($data)) { echo drawTable($data); } else { echo 'Таблица пустая!'; }

// /* УДАЛЕНИЕ ВСЕХ ЗАПИСЕЙ */
// $sql = "truncate table `users`";
// $result = $mysql->query($sql); if (!$result) die($mysql->error);
// // ОТОБРАЖАЕМ РЕЗУЛЬТАТ
// echo '<p>Результат удаления ВСЕХ пользователей</p>';
// $sql = "select * from `users`";
// $result = $mysql->query($sql); if (!$result) die($mysql->error);
// $data = $result->fetch_all(MYSQLI_ASSOC); if (count($data)) { echo drawTable($data); } else { echo 'Таблица пустая!'; }
