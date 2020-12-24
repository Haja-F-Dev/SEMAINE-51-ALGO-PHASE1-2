<?php

/*****************************/
/* EXERCICE 1 : calculatrice */
/****************************/

    $a = 1;
    $b = 2;

    addition($a, $b);
    echo "<br>";
    soustraction($b, $a);
    echo "<br>";
    multiplication($b, $a);
    echo "<br>";
    division($b, $a);

// Addition
function addition($numb1, $numb2) {
    $resultat = $numb1 + $numb2;
    echo $numb1 . " + " . $numb2 . " = " .  $resultat;
}

// Soustraction
function soustraction($numb1, $numb2) {
    $resultat = $numb1 - $numb2;
    echo $numb1 . " - " . $numb2 . " = " .  $resultat;

}

// Multiplication
function multiplication($numb1, $numb2) {
    $resultat = $numb1 * $numb2;
    echo $numb1 . " * " . $numb2 . " = " .  $resultat;
}

// Division
function division($numb1, $numb2) {
    $resultat = $numb1 / $numb2;
    $resultat = settype($resultat, "integer");
    echo $numb1 . " / " . $numb2 . " = " .  $resultat;
}