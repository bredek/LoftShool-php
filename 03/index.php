<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Start page</h1>
    <?php
        session_start();
        // if (!isset($_SESSION['counter'])) $_SESSION['counter']=0;

        // echo "Вы обновили эту страницу ".$_SESSION['counter']++." раз. ";
        // echo "<br><a href=".$_SERVER['PHP_SELF'].">обновить</a><br />";

        $user = [
            'name' => "Eugene",
            'age' => 26,
            'work' => "web-developer",
            'city' => "Kyvb"
        ];

        $_SESSION['user'] = $user;
        $_SESSION['file'] = '';

        echo "<br><a href='readdir.php'>Read directory</a>";
    ?>
</body>

</html>