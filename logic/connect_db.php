<?php
    define('HOST', 'localhost');
    define('DB', '&_mixed_up');
    define('USER', 'root');
    define('PASSWORD', '');
    $connect = mysqli_connect('localhost', 'root', '', '&_mixed_up');
    if($connect -> connect_errno) {
        echo 'Error';
    }
?>