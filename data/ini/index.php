<?php
header('Content-Type: text/html; charset=utf-8');

echo '<a href="?action=write">Запись</a> ';
echo '<a href="?action=read">Чтение</a><br/><br/>';

$action = $_GET['action'];

$readFilename = './settings.ini';
$writeFilename = './test.ini';

$data = array(
    'user' => array(
        'name'     => 'Vasiliy',
        'surname'  => 'Vasiliev',
        'age'      => 18
    ),
    'settings' => array(
        'setting_1' => 'value_1',
        'setting_2' => 'value_2',
        'setting_3' => 'value_3'
    ),
    'content' => array(
        'content_1' => 'value_1',
        'content_2' => 'value_2',
        'content_3' => 'value_3'
    )
);


switch($action){
    case 'write':
        writeIni($writeFilename, $data);
        break;
    default:
        readIni($readFilename);
        break;
}

function readIni($filepath){
    $settings = parse_ini_file($filepath, 1);
    echo '<pre>';
    print_r($settings);
}

function writeIni($filename, $data = array()){

    $lineBreak = "\r\n";

    if(is_array($data) && !empty($data)){
        $str = '';
        foreach($data as $key => $value){
            if(is_array($value)){
                $str .= "[$key]".$lineBreak;
                foreach($value as $key => $value){
                    $str .= "$key = $value".$lineBreak;
                }
            }else{
                $str .= "$key = $value".$lineBreak;
            }
        }
        if(file_put_contents($filename, $str)){
            echo '<br/>Данные успешно записаны';
        }

    }



}
