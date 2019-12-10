<?php

//phpinfo();

$link = mysqli_connect('mysql', 'root', 'root','mysql');
if (!$link) {
    die('Ошибка соединения: ' . mysqli_error());
}
$result = mysqli_query($link, "SELECT * FROM `db`");
while( $row = mysqli_fetch_assoc($result) ){
    printf("%s (%s)\n", $row['Host'], $row['User']);
}
echo 'Успешно соединились';
mysqli_close($link);