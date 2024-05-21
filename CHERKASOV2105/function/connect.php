<?php

    $connect = new mysqli("localhost", "root", "", "db_demo_2024");

    if($connect->connect_error){
        die ("Ошибка подключения к базе данных");
    }

?>