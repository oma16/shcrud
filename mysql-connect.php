<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name ="sidehustle";


$dbc = @mysqli_connect($servername ,$username, $password, $db_name);

if(!$dbc){
         die('could not connect to mysql' . 
        mysqli_connect_error());
}else{
    echo '';
}


?>