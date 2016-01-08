<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class Aluno{
public $matricula;
public $nome;
public $curso;
public $turma;
public $media;
public $aluno;

function conectar(){
$marcio = mysql_connect("localhost","root","") or die("Erro ao conectar, tente novamente mais tarde");
mysql_select_db("t3im1_dbdados")or die("Banco invalido");
}
function consultar($matricula){
$this->matricula=$matricula;
$conectar = "SELECT matricula,nome,curso,turma,media FROM aluno WHERE matricula='$matricula'";
$conect =mysql_query($conectar) or die("Campos não encontrados");
while($linha=mysql_fetch_assoc($conect)){
$aluno = $linha['aluno'];
echo "Matricula: ".($linha['matricula'])."<br>";
echo "Nome: ".($linha['nome'])."<br>";
echo "Curso: ".($linha['curso'])."<br>";
echo "Turma: ".($linha['turma'])."<br>";
echo "Média: ".($linha['media'])."<br>";
echo "<br><br>";
}
}
function login($login,$senha){
$this->login=$login;
$this->senha=$senha;
$con = "select tipo from clientes where login='$loginb' and senha='$senha'";
$result=mysql_queryt($con) or die ("nicolas");
while($linha=mysql_fetch_assoc($result)){
$tipo = $linha['tipo'];
}
$con = "select login,senha from clientes where login='$login' and senha='$senha'";
$result=mysql_query($con) or die ("nicolas");
if(mysql_num_rows($result) !=1){echo"erro";}
else{ if($tipo==1){ header("Location: localhost/secreta_adm.php");}
else{ header("Location: localhost/secreta_clientes.php"); }
}
}
}
?>
</body>
</html>
