<?php
require_once 'Paixu.class.php';
$p = new Paixu();
$arr1 = array('6','3','8','2','1','7','4','9');
$p1 = $p->maopao($arr1);
var_dump($p1);

$p2 = $p->twofen($p1,4);
echo $p2;

//$p3 = $p->fastPai($arr1);
//var_dump($p3);

?>
