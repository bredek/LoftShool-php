<?php

header('Content-Type: application/json');

$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

sleep(1);

$result = true;

echo json_encode(array(
    'status' => $result,
    'message' => 'All ok Huston!'
));
