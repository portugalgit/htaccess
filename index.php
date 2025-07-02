
<a href="perfile">PERFIL</a>
<a href="home">HOME</a>
<a href="produto">PRODUTO</a>

<?php


//echo "Pagina de Teste"; //testar o roteamento

//print_r($_SERVER); // validar as informações da variavel global do php
//print_r($_SERVER['QUERY_STRING']); //validar a informação da string de consulta

$url = explode("/",$_SERVER['QUERY_STRING']);
//require_once ($url[0] . ".php");
 
echo '<br>';
//print_r($url);
echo "<pre>";
print_r($url[0] . ".php");
echo "</pre>";

 
