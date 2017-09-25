<?php
//$db = new mysqli("DB_HOST","DB_USER","DB_PASSWORD","DB_NAME");
$db = mysqli_connect('localhost', 'root', 'root', 'chat');

if(!$db){
    echo 'Cannot connect to DB';
    exit();
}