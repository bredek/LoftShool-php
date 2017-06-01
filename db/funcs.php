<?php

/* Вспомогательный файл */

function drawTable($data) {

    $result = '';
    $result .= '
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Фамилия</th>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Телефон</th>
            <th>E-mail</th>
            <th>Сайт</th>
            <th>Статус</th>
        </tr>
    ';
    foreach($data as $k => $row){
        $result .= '
        <tr>
            <td>'.$row['id'].'</td>
            <td>'.$row['surname'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['patronymic'].'</td>
            <td>'.$row['phone'].'</td>
            <td>'.$row['email'].'</td>
            <td>'.$row['url'].'</td>
            <td>'.$row['status'].'</td>
        </tr>
        ';
    }
    $result .= '</table>';

    return $result;

}

function drawTable2($data) {

    $result = '';
    $result .= '
    <table border="1" cellpadding="10">
        <tr>
    ';
    foreach($data[0] as $key => $val) {
        $result .= '<th>'.$key.'</th>';
    }
    $result .= '
        </tr>
    ';
    foreach($data as $k => $row){
        $result .= '<tr>';
        foreach($row as $key => $val) {
            $result .= '<td>'.$val.'</td>';
        }
        $result .= '</tr>';
    }
    $result .= '</table>';

    return $result;

}