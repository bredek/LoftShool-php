<?php
header('Content-Type: text/html; charset=utf-8');

echo '<a href="?action=encode">Encode</a> ';
echo '<a href="?action=decode">Decode</a><br/><br/>';

$action = $_GET['action'];

switch($action){
    case 'decode':
        $data = array(
            "countries" => array(
                array("title" => "Россия"),
                array("title" => "США"),
                array("title" => "Испания"),
                array("title" => "Австралия"),
            )
        );

        $jsonString = json_encode($data, JSON_UNESCAPED_UNICODE);
        echo $jsonString;
        break;
    default:
        $jsonPath = './countries.json';
        $jsonFile = file_get_contents($jsonPath);
        $jsonArray = json_decode($jsonFile);

//        $countries = $jsonArray['response']['items'];
        $countries = $jsonArray->response->items;
        foreach($countries as $country){
            echo $country->id . '-' . $country->title . '<br/>';
        }
        break;
}

