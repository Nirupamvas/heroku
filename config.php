<?php
define('DB_SERVER','ec2-3-228-114-251.compute-1.amazonaws.comt');
define('DB_USER','rdokzsyrwuwvqw');
define('DB_PASS' ,'0786e933890838e35e7ed138b66d356831fb8ef23ffb0652e89ca99628f488f6');
define('DB_NAME', 'dddlvoacgltgs9');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
