<?php

function passwordGenerator($PasswordLenght, $numeri, $lettere_Maiuscole, $lettere_minuscole, $simboli){

$password = "";

for ($i=0; $i < $PasswordLenght ; $i++) { 

    $randomNumero = chr(rand(48,57));
    $randomLetteraMaiuscola = chr(rand(65,90));
    $randomLetteraMinuscola = chr(rand(97,122));
    $randomSimbolo = chr(rand(33,47));

    if($numeri === 'on'){
        $password = $password . $randomNumero; 
    };

    if($lettere_Maiuscole === 'on'){
        $password = $password . $randomLetteraMaiuscola; 
    };
    
    if($lettere_minuscole === 'on'){
        $password = $password . $randomLetteraMinuscola; 
    };
    
    if($simboli === 'on'){
        $password = $password . $randomSimbolo; 
    };
    
};

if($numeri !== 'on' && $lettere_Maiuscole !== 'on' && $lettere_minuscole !== 'on' && $simboli !== 'on'){
    echo "Seleziona almeno una checkbox";
};

echo str_shuffle($password); 

}