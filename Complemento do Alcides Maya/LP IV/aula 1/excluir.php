<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
session_start();
session_name("secreta.php");
$login=$_SESSION['login'];
$nicolas=mysql_connect("localhost","root","") or die("Ha tempos");
mysql_select_db("t3im1_dbdados") or die("pais e filhos");
$excluir= "delete from alunos where login='$login' ";
$result=mysql_query($excluir) or die("faroeste cabloco");
header("Location: index.php");


?>
</body>
</html>
