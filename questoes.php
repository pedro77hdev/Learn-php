<?php

/* 
------------------------------------------- 1 QUESTÃO ----------------------------------------- */

/* $estados = array("Acre (AC)" ,
"Alagoas (AL)" ,
'Amapá (AP)' ,
"Amazonas (AM)" ,
"Bahia (BA)" ,
"Ceará (CE)" ,
'Distrito Federal (DF)' ,
"Espírito Santo (ES)" ,
"Goiás (GO)" ,
"Maranhão (MA)" ,
"Mato Grosso (MT)" ,
"Mato Grosso do Sul (MS)" ,
"Minas Gerais (MG)" ,
"Pará (PA)" ,
"Paraíba (PB)" ,
"Paraná (PR)" ,
"Pernambuco (PE)" ,
'Piauí (PI)' ,
"Rio de Janeiro (RJ)" ,
"Rio Grande do Norte (RN)" ,
"Rio Grande do Sul (RS)" ,
"Rondônia (RO)" ,
"Roraima (RR)" ,
"Santa Catarina (SC)" ,
"São Paulo (SP)" ,
"Sergipe (SE)" ,
"Tocantins (TO)" );

sort($estados);

print_r($estados) */


/*-------------------------------------------------- 2 QUESTÃO ---------------------------------------------------*/


/* $numeros = array(
    1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20


);



function pares($numero ){
    return $numero % 2== 0;  
}

$numerospares = array_filter($numeros , 'pares');

function impares($numero ){
    return $numero % 2== 1;  
}

$numerosimpares = array_filter($numeros , 'impares');

print_r( $numerospares );
echo "<br>";
print_r($numerosimpares);
 */

 /*-------------------------------------------------- 3 QUESTÃO ---------------------------------------------------*/


$nomes = array(
    "carlos" ,
    "antonio",
    "jose" ,
    "carlos" ,
    "jose" 
);

$nomesunicos = array_unique($nomes);

print_r($nomesunicos)


foreach($nomesunicos as $maiscula){

};


?>
