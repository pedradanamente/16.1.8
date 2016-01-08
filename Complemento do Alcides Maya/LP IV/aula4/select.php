<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$marcio_lulu=mysql_connect("localhost","root","")
or die("ramona oi!!!!!!!!!!!!!!!!");
mysql_select_db("lojadvd")
or die("onde esta rouxinol");
$consulta="select genero from dvds ";
$result=mysql_query($consulta)
or die(" volte ......");
?>

<form id="form1" name="form1" method="post" action="consulta_filme.php">
<select name="genero" id="select">
<?php
while($linha=mysql_fetch_assoc($result)){
$genero=$linha['genero'];
echo "<input name='filmes[]' type='checkbox' value='preco'>
      $genero<br>";
}
?>

    <input type='submit' name='button' id='button' value='submit' />
    </label>
    
</form>

</body>
</html>
