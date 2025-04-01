<?php

$host = getenv('aws.connect.psdb.cloud');
$user = getenv('j9m9gma0v7235jowbmbo');
$pass = getenv('pscale_pw_4gQU4PL1Yf1X58ZL9QdfibVnHBam7xAeE9wUkrKkdz1');
$db = getenv('sanal');

$conn=new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "Холболтын алдаа гарлаа.";
}
?>
