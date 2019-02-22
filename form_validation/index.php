<?php
    session_start();
    session_unset();
    require 'upload.php';
    require 'csv-upload.php';
    require 'info-valid.php';
    
    if($_SESSION['upload']['hasCSV'] || ($_SESSION['price']['isset']&&$_SESSION['name']['isset'])){
        header("Location: /php-basic/result/");
        die();
    } else {
        header("Location: /php-basic/");
        die();
    }

?>