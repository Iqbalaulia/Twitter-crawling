<?php

$server = "localhost";
$user = "root";
$password = "sepatusandal12";
$nama_database = "akses_tweet_global";

$db = new mysqli ($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}

?>