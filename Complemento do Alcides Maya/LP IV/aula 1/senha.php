<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>senha</title>
</head>

<body>
<?php
$login=$_POST['login'];
$senha=$_POST['senha'];
$nicolas=mysql_connect("localhost","root","") or die("Ha tempos");
mysql_select_db("t3im1_dbdados") or die("pais e filhos");
$consulta="select login,senha from alunos where login='$login' and senha='$senha'";
$result=mysql_query($consulta) or die ("metal contra as nuvens");

if(mysql_num_rows($result) !=1){
echo "login errado";
}else{
session_start();
session_name("secreta");
$_SESSION['validacao']=1;
$_SESSION['login']=$login;
header("Location: secreta.php");
}

?>
</body>
</html>
