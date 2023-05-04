<?php
require 'vendor/autoload.php';
use Yvandouenel\StatePattern\Vehicule;
$v = new Vehicule();
$v->start();
echo PHP_EOL;
var_dump($v);
echo PHP_EOL;
$v->start();
echo PHP_EOL;
var_dump($v);
$v->stop();
echo PHP_EOL;
$v->stop();
echo PHP_EOL;
var_dump($v);