<?php

/**
 * @author Kleber Hamada Sato
 * @copyright 2011
 */
 
 //essa fun��o verifica se o n�mero � par ou �mpar
 
function numPar($numero)
{
   echo ($numero%2==0)? '� par':'� �mpar';
    
}

//captura do input mediante o m�todo POST do formul�rio da p�gina principal (index)

$valor = $_POST['numero'];

// executa a fun��o numPar e atribui o valor a uma vari�vel
$numero = numPar($valor);

//imprime a vari�vel $numero
echo $numero;


?>

<html>
<body>
<p>
<a href="index.php">Voltar</a>
</p>
</body>
</html>