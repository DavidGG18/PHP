<?php

$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";

if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
  }
}

?>

 <!DOCTYPE html>
 <html lang="pt-br" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title> Calculadora </title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
     <h1> = <?=$resul;?></h1>
     <form method="post">
     
<h1> Calcuradora </h1>
       <label>Número 1: <input type="text"  placeholder=" Insira um número " name="txtNumero1"/> </label><br>
       <label>Número 2: <input type="text" placeholder="Insira outro número" name="txtNumero2"/></label><br>
       <label>Operação:
      
       <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="btnCalcular" value="Calcular =">
     </form>
   </body>
 </html>