<?php
    // task #1
    $name = 'Jack';
    $age = 26;
    echo 'My name is ', $name, '<br>';
    echo 'I am ', $age, '<br>';
    
    // task #2
    define(MYCONST,2346);
    echo MYCONST, '<br>';

    // task #3
    $working_age = 12;
    if($working_age >= 18 and $working_age <= 65){
        echo "You still need to work hard boy! <br>";
        echo "You are just $working_age <br>";
    } elseif ($working_age < 18){
        echo "Enjoy your childhood boy! <br>";
    } elseif($working_age > 65) {
        echo "Have some rest old boy! <br>";
    } else {
        echo "Wow age is not defined";
    }

    // task #4
    $day = 2;
    switch ((integer)$day) {
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo "It's a working day fella!<br>";
            break; 
        case 6:
        case 7:
            echo "Wooho! It's weekend buddy!<br>";
            break; 
        default:
            echo "Who knows what day is it!?<br>";
            break; 
    }

    // task #5
    $bmw = [
        "model" => "X5",
        "speed" => 120,
        "doors" => 5,
        "year" => "2015"
    ];
    foreach ($bmw as $value) { 
        echo "<b>$value</b> ";
    }
    echo '<br>';

    // task #6
    for($i = 1; $i <= 7; $i++){
        for($j = 1; $j <= 6; $j++){
            echo $i * $j, ' ';
        }
        echo '
        <br>';
    }

    // task #7
    $menu = [
        "home" => "/hovme",
        "about" => "/about",
        "contacts" => "/contacts",
        "services" => "/services"
    ];
    echo '<ul class="menu">';
    foreach ($menu as $key => $value) { 
        echo "<li><a href=$value>$key</a></li>";
    }
    echo '</ul>';
    echo '<br>';
?>