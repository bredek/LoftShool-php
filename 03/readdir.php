<?php
    // пример чтения директории
    echo '<h1>File system <br></h1>';
    $dir = opendir('.');
    echo '<ul>';
    while ($fl = readdir($dir)){
        echo 
        "<li>
            <a href=".$fl.">$fl</a>
            <button>Edit</button>
            <button>Download</button>
            <button>Remove</button>
        </li>";
    }
    echo '</ul>';