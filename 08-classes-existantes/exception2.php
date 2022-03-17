<?php

set_error_handler("exception_error_handler"); // indique la fonction a apperler en cas d'erreur.

function exception_error_handler($errno, $errstr, $errfile, $errline)
{
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
    // instancie une class ErrorException en passant le string de l'erreur
    // ( message de l'erreur ), le numéro de l'erreur, le code de l'erreur, le fichier où se trouve l'erreur,
    // la ligne de code concerné par l'erreur.
}

try {
    echo $prenom;
} catch (ErrorException $error) {
    //var_dump($error);
    echo "Erreur : " . $error->getMessage() . "<br>";
    echo "Fichier : " . $error->getFile() . "<br>";
    echo "Ligne : " . $error->getLine() . "<br>";
}

// documentation sur ErrorException : https://www.php.net/manual/fr/class.errorexception.php
