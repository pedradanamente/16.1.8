
<?php
session_start();
session_name("secreta");
if($_SESSION['validacao']==1){
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aula-02</title>
<link href="css_body.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
  <div id="header">
    <div id="logo"></div>
  </div>
  <div id="nav">Aqui teremos uma barra de navegação horizontal que será feita na aula 5</div>
  <div id="center">
    <div id="menu"> <?php include("menu.html"); ?></div>
    <div id="content"> <?php include("content.html"); ?> </div>
  </div><!--Fim do div center -->
  <div id="footer">
    <div id="email">email@site.com.br</div> 
    <div id="fone">Fone 51-3022-6608</div>
  </div>
  <!--Fim do div footer -->
</div><!--Fim do div container -->
</body>
</html>


<?php
}else{
echo "acesso negado";
}
?>
