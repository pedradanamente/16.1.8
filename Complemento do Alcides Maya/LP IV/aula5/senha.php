
<?php
$login=$_POST['login'];
$senha=$_POST['senha'];
$apocalipse=mysql_connect("localhost","root","")
or die("highway to hell");
mysql_select_db("t3im1_dbdados")
or die("black in black");
$consulta="select login, senha from alunos
           where login='$login' and senha='$senha'";
$result=mysql_query($consulta)
or die("TNT");
if (mysql_num_rows($result)!=1){
echo "login invalido";
}else{
session_start();
session_name("secreta");
$validacao=1;
$_SESSION['login']=$login;
$_SESSION['validacao']=$validacao;
header("Location: secreta.php");
}
?>
