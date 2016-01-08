<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$nicolas=mysql_connect("localhost","root","") or die("Ha tempos");
mysql_select_db("t3im1_dbdados") or die("pais e filhos");
$consultar= "select nome,endereco,cidade from alunos where login='kari' ";
$result=mysql_query($consultar) or die ("indios");
?>
<form id="form1" name="form1" method="post" action="alterar.php">
<?php
while($linha=mysql_fetch_assoc($result)){
$nome=$linha['nome'];
$endereco=$linha['endereco'];
$cidade=$linha['cidade']; 
}
?>
  <p>Nome :
    <input type="text" value="<?php echo $nome; ?>" name="nome" id="textfield" />
</p>
  <p>Endereço: 
    <input type="text"  value="<?php echo $endereco; ?>" name="endereco" id="textfield2" />
</p>
  <p>Cidade: 
    <input type="text" value="<?php echo $cidade; ?>"  name="cidade" id="textfield3" />
</p>
  <p>
    <input type="submit" name="button" id="button" value="Alterar" />
  </p>
</form>
</body>
</html>
