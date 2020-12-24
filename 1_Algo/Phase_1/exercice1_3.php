<?php

/**
 * Main : Programme principale
 */

// Capital placé initialement
$co = 100000;

// Calcul pour la solution A : un placement d'une durée de 5 ans au taux d'intérêt annuel de 4%.
$taux1 = 4;
$n1 = 5;
$solutionA = calculInteret($co, $n1, $taux1);
echo "Avec la solution A, Sébastien et Vanessa auront : " . $solutionA . " €<br>";

// Calcul pour la solution B : un placement d'une durée de 5 ans au taux d'intérêt annuel de 4%.
$taux2 = 5;
$n2 = 4;
$solutionB = calculInteret($co, $n2, $taux2);
echo "Avec la solution B, Sébastien et Vanessa auront : " . $solutionB . " €<br>";

if ($solutionA > $solutionB) {
    echo "La formule la plus avantageuse est la solution A";
} else {
    echo "La formule la plus avantageuse est la solution B";
}

/**
 * Fonction permettant de calculer les interets
 */

function calculInteret($placementBase, $dureePlacement, $tauxInteret)
{
    $cn = $placementBase * (pow((1 + ($tauxInteret / 100)), $dureePlacement));
    return $cn;
}
