48596+3
wxdfgyuiop$*<?php
// -- Exo 1
/**
 * @param $class
 * @return bool
 */
function checkClass($class)
{
    // Avec le switch on test la valeur de $class dans les 3 premiers cas on retourne true sinon false (par defaut)
    switch ($class) {
        case is_a($class, 'Foo'):
            return true;
            break;
        case is_a($class, 'User'):
            return true;
            break;
        case is_a($class, 'Country'):
            return true;
            break;
        default:
            return false;
    }
}

// -- Exo 2
/**
 * @param $word
 * @return bool
 */
function checkAnagramme($word)
{
    $word1 = "ravie";
    $word2 = strtolower($word);

    if (count_chars($word1, 1) == count_chars($word2, 1)) {
        return true;
    } else {
        return false;
    }
}

// -- Exo 4
/**
 * @param $word
 * @return bool
 */
function checkPalindrome($word)
{

    // On remplace les caracteres avec accent
    $word = strtr($word, "ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ", "aaaaaaaaaaaaooooooooooooeeeeeeeecciiiiiiiiuuuuuuuuynn");

    // On met tout en minuscule et on supprime les caracteres speciaux
    $metacarac = [" ", "!", ":", "?", ".", "/", "$", "&", "%", "'", ","];
    $word = strtolower(str_replace($metacarac, "", $word));

    // On inverse le sens des lettres
    $inversion = strrev(($word));

    // On teste si le mot ou la phrase est un palindrome
    if ($word == $inversion) {
        return true;
    } else {
        return false;
    }
}

// -- Exo 5
/**
 * @param $word
 * @return string
 */
function checkBlackBox($word)
{
    $mot = strtolower($word); // on met en minuscule
    $arr = array(
        "a" => "b",
        "b" => "c",
        "c" => "d",
        "d" => "e",
        "e" => "f",
        "f" => "g",
        "g" => "h",
        "h" => "i",
        "i" => "j",
        "j" => "k",
        "k" => "l",
        "l" => "m",
        "m" => "n",
        "n" => "o",
        "o" => "p",
        "p" => "q",
        "q" => "r",
        "r" => "s",
        "s" => "t",
        "t" => "u",
        "u" => "v",
        "v" => "w",
        "w" => "x",
        "x" => "y",
        "y" => "z",
        "z" => "a",
        "3" => "21",
        "6" => "42",
        "9" => "63",
        "41" => "287"
    ); // on change les valeurs dans un tableau 

    $retour = strtr($word, $arr); // on fait le remplacement sur word
    $retour = preg_replace("/[^A-Za-z0-9]+/", "a", $retour); // maintenant tout ce qui n'est pas alphanumérique on le remplace
    return $retour;
}
