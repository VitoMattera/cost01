<?php

include ('../src/NS01TestClass01.php');
include ('../src/NS02TestClass01.php');


$a = new \Cost\Cost01\TestClass01("Cezar","Caia");
$b = $a->getDetails();

echo $b. "\n";

$a = new \Cost\Cost01\TestClass02("Cezar","Caia");
$b = $a->getDetails();

echo $b;

?>