<?php
header('Content-type:text/html;charset=utf-8');
//两个正整数的最大公约数和最小公倍数
function go($m,$n){
	$i = $m;
	$j = $n;

	while($n<>0){
		$p = $m%$n;
		$m = $n;
		$n = $p;
	}
	
	return '最大公约数是'.$m.'最小公倍数是'.$i*$j/$m;
}

echo go(30,18);
echo '----';
echo go(13,10);
