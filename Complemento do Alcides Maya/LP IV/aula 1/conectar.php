<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>index</title>
</head>

<body>

<p>&nbsp;</p>
<form id="form1" name="form1" method="post" action="">
  <p>Digitre a cidade de aonde que sejam listadas as pessoas: 
    <input type="text" name="cidade" id="textfield" />
</p>
  <p>
    <input type="submit" name="button" id="button" value="Consulta" />
</p>
</form>
<p>
<?php
$cidade=$_POST['cidade'];
$con = mysql_connect("localhost","root","") or die("Erro ao conectar, tente novamente mais tarde");
mysql_select_db("manutencao")or die("Banco invalido");
echo "Estabelecido";
echo "<br><br>";
$conectar="SELECT nome,endereco,idcli FROM cliente WHERE cidade='$cidade'";
$conect =mysql_query($conectar) or die("Campos não encontrados");
while($linha=mysql_fetch_assoc($conect)){
$idcli = $linha['idcli'];
echo "Nome: ".($linha['nome'])."<br>";;
echo "Endereço: ".($linha['endereco'])."<br>";
echo "<p><a href='detalhes.php?idcli=$idcli'>DETALHES</a></p>";
echo "<br><br>";
}
?>
</p>
</body>
</html>
