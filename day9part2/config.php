<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname= 'riga';

    try{
        $connect = new PDO("mysql:host=$server;dbname=$dbname", $username, $password);
    }catch(Exception $e){
        echo "something went wrong";
        }



?>