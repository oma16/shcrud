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

$active_group ='default';
$query_builder =TRUE;
$db['default'] =  array(
'dsn' => '';
'hostname' => 'eu-cdbr-west-03.cleardb.net';
'username' => 'b7288f43bb52cf';
'password' => '806062fb';
'database' => 'heroku_c85d074a1a36290';
'dbdriver' => 'mysqli';
'dbprefix' => '';
'pconnect' =>FALSE;
'db_debug' => (ENVIRONMENT !== 'production');
'cache_on' => FALSE;
'cachedir' => '';
'char_set' => 'utf8';
'dbcollat' => 'utf8_general_ci';
'swap_pre' => '';
'encrypt' => FALSE;
'compress' => FALSE;
'stricton' => FALSE;
'failover' => array();
'save_queries' => TRUE;



);
?>
