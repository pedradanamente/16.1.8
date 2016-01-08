<?php
class Banco{
public $cidade;
public $login;
public $nome;
public $endereco;
public $senha;
function conectar(){
$marcio = mysql_connect("localhost","root","") or die("Erro ao conectar, tente novamente mais tarde");
mysql_select_db("t3im1_dbdados")or die("Banco invalido");
}
function consultar($cidade){
$this->cidade=$cidade;
$conectar = "SELECT nome,endereco FROM alunos WHERE cidade='$cidade'";
$conect =mysql_query($conectar) or die("Campos não encontrados");
while($linha=mysql_fetch_assoc($conect)){
$idcli = $linha['idcli'];
echo "Nome: ".($linha['nome'])."<br>";
echo "Endereço: ".($linha['endereco'])."<br>";
echo "<br><br>";
}
}
function excluir($login){
$this->login=$login;
$excluir="delete from alunos where login='$login'";
$t=mysql_query($excluir) or die ("ahahahaha");
echo " dados excluidos";
}
function incluir($login,$nome,$endereco){
$this->login=$login;
$this->nome=$nome;
$this->endereco=$endereco;
$incluir="insert into php(login,nome,endereco) values ('$login','$nome','$endereco')";
$isso = mysql_query($incluir) or die ("aushuahs");
echo "dados incluidos com sucesso";
}
function alterar($login,$nome,$endereco){
$this->login=$login;
$this->nome=$nome;
$this->endereco=$endereco;
$alterar1=mysql_connect("localhost","root","") or die("Ha tempos");
mysql_select_db("t3im1_dbdados") or die("pais e filhos");
$alterar= "UPDATE php SET login='$login',nome='$nome',endereco='endereco' where login='$login' ";
$result=mysql_query($alterar) or die ("indios");
echo "dados alterados com sucesso";
}
function login($login,$senha){
$this->login=$login;
$this->senha=$senha;
$consulta="select login,senha from alunos where login='$login' and senha='$senha'";
$r=mysql_query($consulta) or die("auisyhd")
if(mysql_num_rows($r)!=1){
echo "erro no login";
}else{
session_start();
session_name("secreta");
$_SESSION['validacao']=1;
$_SESSION['login']=$login;
header('Location: secreta.php');
}
}
}
?>