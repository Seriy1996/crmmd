<?php

$mysqli = new mysqli ('localhost', 'crmmd', '12129011', 'my_1crm');
mysqli_set_charset($mysqli, "utf8");

if(mysqli_connect_errno())
{
  echo 'connecting error ('.mysqli_connect_errno().'): '. mysqli_connect_error();
  exit();
}
$mysqli->close ();
?>
