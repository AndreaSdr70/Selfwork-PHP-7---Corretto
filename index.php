<?php


// $password = readline("Inserisci la tua password: \n");

//almeno 8 caratteri
function checkLenght($string){
    if(strlen($string)>8){
        return true;
    }
    echo "La password deve contenere almeno 8 caratteri \n";
    return false;
}
// $firstrule = checkLenght($password);
//var_dump ($firstrule);

//almeno una lettera maiuscola

function checkUppercase ($string){
    for($i=0; $i<strlen($string); $i++){
        if(ctype_upper($string[$i])){
            return true;
        }
    }
    echo "Manca una lettera maiuscola \n";
    return false;
}

// $secondrule = checkUppercase($password);
// var_dump($secondrule);

//almeno un carattere numerico

function checkNumber($string){
    for($i=0; $i<strlen($string); $i++){
        if(is_numeric($string[$i])){
            return true;
        }
    }
    echo "Almeno un carattere numerico \n";
    }
// $thirdrule = checkNumber($password);
// var_dump($thirdrule);

//almeno un carattere scpeciale
function checkSpecial($string){
    $special_chars = ['!', '@', '?', '$'];
    for($i=0; $i<strlen($string); $i++){
        if(in_array($string[$i], $special_chars)){
            return true;
        }
    }
    echo "Almeno un carattere speciale \n";
    return false;
}

// $fourthrule = checkSpecial($password);
// var_dump($fourthrule);

function checkPassword($string){
    $firstrule = checkLenght($string);
    $secondrule = checkUppercase($string);
    $thirdrule = checkNumber($string);
    $fourthrule = checkSpecial($string);

    if($firstrule && $secondrule && $thirdrule && $fourthrule){
         echo "Password accettata! \n";
    }
       
    return $firstrule && $secondrule && $thirdrule && $fourthrule;

}
// var_dump(checkPassword($password));

do {
    $password = readline("Scrivi la tua password: \n");
}while(!checkPassword($password));
