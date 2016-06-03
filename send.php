<?php
$mysqli = mysqli_connect ('localhost', 'crmmd', '12129011', 'my_1crm');
mysqli_set_charset($mysqli, "utf8");
$mysqli->query ("INSERT INTO `form` (`id`, `name`, `email`, `pnum`) VALUES (NULL, `$fio`, `$mail`, `$pnum`)");
if(mysqli_connect_errno())
{
  echo 'connecting error ('.mysqli_connect_errno().'): '. mysqli_connect_error();
  exit();
}
if(isset($_POST["send"]))
{
$fio=$_POST["fio"];
echo "Привет, " .$fio;

}
$mysqli->close ();

?>
