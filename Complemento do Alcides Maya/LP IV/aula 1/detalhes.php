<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$idcli=$_GET['idcli'];
$con = mysql_connect("localhost","root","") or die("Erro ao conectar, tente novamente mais tarde");
mysql_select_db("manutencao")or die("Banco invalido");
echo "Estabelecido";
echo "<br><br>";
$conectar="SELECT nome,endereco,cidade,bairro,uf FROM cliente WHERE idcli='$idcli'";
$conect =mysql_query($conectar) or die("Campos não encontrados");
while($linha=mysql_fetch_assoc($conect)){
$idcli = $linha['idcli'];
echo "Nome: ".($linha['nome'])."<br>";;
echo "Endereço: ".($linha['endereco'])."<br>";
echo "Cidade: ".($linha['cidade'])."<br>";
echo "Bairro: ".($linha['bairro'])."<br>";
echo "UF: ".($linha['uf'])."<br>";
echo "<br><br>";
}
?>
</body>
</html>
