<?php

$token = 'c54c46699f7c2bcda74de04b0f692c996c5e8cfa46e110e6f92af77ce20b24d65fc711d52341d52bd1199';

/*$wallOptions = array(
    'owner_id' => '2538870',
    'message' => 'Привет от CURL'
);

$wallpost = vkRequest('wall.post', $wallOptions, $token);
echo $wallpost;*/

/*$usersOptions = array(
    'user_ids' => 'l_verbitsky,88201108,1',
    'fields' => 'photo_400_orig'
);

$users = vkRequest('users.get', $usersOptions);

echo $users;*/


/*$countriesOptions = array(
    'need_all' => 1,
    'count' => 250
);

$countries = vkRequest('database.getCountries', $countriesOptions);

echo $countries;*/

function vkRequest($method, $options = array(), $token = ''){
    $params = http_build_query($options);
    $url = 'https://api.vk.com/method/'.$method.'?'.$params.'&access_token='.$token;
    $curl = curl_init(); // Начинаем построение curl запроса

    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // Запрещаем вывод в браузер
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, true); // Убираем проверку SSL
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false); // Убираем SSL проверку хоста
    curl_setopt($curl, CURLOPT_URL, $url); // Устанавливаем URL для запроса

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;
}