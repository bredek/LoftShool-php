<?php
header('Content-Disposition: attachment; filename=file.jpg');
// читаем содержимое файла
readfile('PHP.png');
exit;