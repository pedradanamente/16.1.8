<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$alterar1=mysql_connect("localhost","root","") or die("Ha tempos");
mysql_select_db("t3im1_dbdados") or die("pais e filhos");
$alterar= "UPDATE alunos SET nome'kari siverisi', cidade='rio' where login='kari' ";
$result=mysql_query($alterar) or die ("indios");
echo "dados alterados com sucesso"; 
 

?>
</body>
</html>
