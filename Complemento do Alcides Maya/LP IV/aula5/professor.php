<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
class Professor extends Aluno{
function consulta_alunos(){
$consulta="select matricula,nome,curos,turma,media from alunos";
$r=mysql_query($consulta)or die("nicolas");
while($linha=mysql_fetch_assoc($r)){
echo "Matricula: ".($linha['matricula'])."<br>";
echo "Nome: ".($linha['nome'])."<br>";
echo "Curso: ".($linha['curso'])."<br>";
echo "Turma: ".($linha['turma'])."<br>";
echo "Média: ".($linha['media'])."<br>";
echo "<br><br>";
}
}
function incluir($login,$nome,$endereco){
$this->media=$media;
$incluir="insert into php(media) values ('$media')";
$isso = mysql_query($incluir) or die ("aushuahs");
echo "dados incluidos com sucesso";
}
function alterar($login,$nome,$endereco){
$this->media=$media;
$alterar1=mysql_connect("localhost","root","") or die("Ha tempos");
mysql_select_db("escola") or die("pais e filhos");
$alterar= "UPDATE php SET matricula='$matricula'";
$result=mysql_query($alterar) or die ("indios");
echo "dados alterados com sucesso";
}
function excluir($login){
$this->media=$media;
$excluir="delete media='$media' from aluno where login='$login' and senha='$senha'";
$t=mysql_query($excluir) or die ("ahahahaha");
echo " dados excluidos";
}

}
?>
</body>
</html>
