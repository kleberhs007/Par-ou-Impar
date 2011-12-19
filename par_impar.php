<html>
<head>
<meta http-equiv="content-type" content="text/html charset=utf-8" />
</head>

<?php

/**
 * @author Kleber Hamada Sato
 * @copyright 2011
 */

 //essa função verifica se o número é par ou ímpar

function numPar($numero)
{
   if (!is_numeric($numero))
   {
    echo 'Não é número. Favor digitar um número';
   }
   else
   {
   echo ($numero%2==0)? 'É par':'É ímpar';
   }
}

//captura do input mediante o método POST do formulário da página principal (index)

$valor = $_POST['numero'];

// executa a função numPar e atribui o valor a uma variável
$numero = numPar($valor);

//imprime a variável $numero
echo $numero;


?>


<body>
<p>
<a href="index.php">Voltar</a>
</p>
</body>
</html>