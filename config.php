<?php
define('DB_SERVER','ec2-3-228-114-251.compute-1.amazonaws.comt');
define('DB_USER','rdokzsyrwuwvqw');
define('DB_PASS' ,'0786e933890838e35e7ed138b66d356831fb8ef23ffb0652e89ca99628f488f6');
define('DB_NAME', 'dddlvoacgltgs9');
$con = pg_connect("host=ec2-3-228-114-251.compute-1.amazonaws.com dbname= dddlvoacgltgs9 user =rdokzsyrwuwvqw password= 0786e933890838e35e7ed138b66d356831fb8ef23ffb0652e89ca99628f488f6");
// Check connection
if (pg_last_error())
{
 echo "Failed to connect to MySQL: " . pg_last_error();
}
?>
