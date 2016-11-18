<?php

//最小公倍数扩倍法，前提：不是互质数，把较大的数依次扩大整数倍
function go($m,$n){
	if($n==0){return $n;}else{
		$m = max($m,$n);
		$n = min($m,$n);
		for($i=2;$i<=$m;$i++){
			if(is_int($m*$i/$n)){
				return $m*$i;
			}
		}
	}
	return $m*$n;

}

echo go(30,18);
echo '----';
echo go(20,6);
