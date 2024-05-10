<?php

$numero = filter_input(INPUT_POST, "numeroT");

if($numero % 2 == 0){
echo "Par";
}else{ /* Else = senão*/
echo "Impar";
}
?>

<html>
<head>
<title> Par ou impar </title>

<style>
input,select{padding:10px; margin:5px;}
</style>

</head>

<body>

<h2> Digite um número, para saber se ele e par ou impar: </h2>

<form method="post"> 
<label> Número <input type="number" placeholder="Número" name="numeroT"/> </label> <br>
<input type="submit" name="botão" value="Descobrir" />
</form>; 


</body>
</html>