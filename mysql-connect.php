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
'mysqli'  => [
    'driver'    => 'mysqli',
    'host'      => env('DB_HOST', 'eu-cdbr-west-03.cleardb.net'),
    'database'  => env('DB_DATABASE', 'heroku_c85d074a1a36290'),
    'username'  => env('DB_USERNAME', 'b7288f43bb52cf'),
    'password'  => env('DB_PASSWORD', '806062fb'),
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'    => '',
    'strict'    => false,
],

?>
