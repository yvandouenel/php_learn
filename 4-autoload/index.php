<?php
require 'vendor/autoload.php';
use Diginamic\Test\User;
$u1 = new User("Bob");
echo $u1->getName();