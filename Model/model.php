<?php

define('HOST','localhost');
define('USER','root');
define('PASS','');
define('BASE','crowfd');

$con=mysqli_connect(HOST,USER,PASS,BASE);
if($con == false)
{
    echo "Probleme de connexion"; exit();
}





?>