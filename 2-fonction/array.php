<?php
/**
 * Calcule la somme des éléments d'un tableau
 *
 * @param array $tab
 * @return float
 */
function sum_array($tab) {
    $total = 0;
    if (is_array($tab) && count($tab) > 0) {
        foreach ($tab as $value) {
            $total += $value;
        }
    }
    return $total;
}

/**
 * Calcule la moyenne des éléments d'un tableau
 *
 * @param array $tab
 * @return void
 */
function moy_array($tab) {
    return sum_array($tab)/count($tab);
}

/**
 * Retourne la valeur minimale d'un tableau
 *
 * @param array $tab
 * @return int|float
 */
function min_array($tab) {
    $i=0;
    $min = 0;
    foreach ($tab as $value) {
        if ($i === 0) {
            $min = $value;
            $i = 1;
        }
        elseif ($value < $min) {
            $min = $value;
        }
    }
    return $min;
}

/**
 * Renvoie la valeur maximale d'un tableau
 *
 * @param array $tab
 * @return int|float
 */
function max_array($tab) {
    $i = 0;
    $max = 0;
    foreach ($tab as $value) {
        if ($i === 0) {
            $max = $value;
            $i =1;
        }
        elseif ($value > $max) {
            $max = $value;
        }
    }
    return $max;
}

/**
 * retourne un tableau de nb éléments tirés au hasard entre $min et $max
 *
 * @param int $min la valeur de l'élément le plus petit
 * @param int $max la valeur de l'élément le plus grand
 * @param int $nb nombre d'éléments à insérer dans le tableau
 * @return array
 */
function random_fill_array($min,$max,$nb) {
    $minimum = 0;
    if ($min > $max) {
        $minimum = $max;
        $max = $min;
    } else {
        $minimum = $min;
    }
    for ($i=0;$i<$nb;$i++) {
        $tab[$i] = rand($minimum, $max);
    }
    return $tab;
}

/**
 * Affiche un tableau
 *
 * @param array $tab le tableau à afficher
 * @param boolean $assoc true si $tab est associatif sinon false
 * @param string $text texte à afficher devant chaque élément
 * @return void
 */
function display_array($tab,$assoc=false,$text='') {
    foreach ($tab as $key=>$value) {
        if ($assoc === true) {
            echo "$key :";
        }
        echo "$text $value".PHP_EOL;
    }
}