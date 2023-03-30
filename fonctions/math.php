<?php
/**
 * Retourne le carré d'un nombre
 *
 * @param float $param le nombre pour lequel calculer le carré
 * @return float
 */
function carre(float $param):float
{
    return $param*$param;
}

/**
 * Retourne la factorielle d'un nombre
 * 
 * @param float $param le nombre pour lequel calculer la factorielle
 * @return float
 */
function factorielle($param)
{
    $fac = 1;
    while ($param > 0) {
        $fac = $fac*$param;
        $param--;
    }
    return $fac;
}

/**
 * Affiche si un nombre est pair ou impair
 *
 * @return void
 */
function estPair($param)
{
    if (!($param%2)) {
        echo "$param est pair".PHP_EOL;
        return;
    }
    echo "$param est impair".PHP_EOL;
}

/**
 * Retourne la multiplication des nombres en paramètres
 *
 * @return float
 */
function multiplie(...$params)
{
    if (count($params) === 0) {
        echo "Il n'y a pas de paramètres".PHP_EOL;
        return null;
    }
    $return = 1;
    foreach ($params as $param) {
        $return = $return*$param;
    }
    return $return;
}
