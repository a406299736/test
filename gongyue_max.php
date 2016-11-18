<?php
//求2个正整数的最大公约数
//思路
//1.分别用m，n，r表示被除数，除数，余数。求m／n的余数r
//2.如果r＝0，则n为最大公约数，如果r!=0,执行第三步
//3.将n的值赋给m，将r的值赋给n
//4.返回重新执行第一步，回调函数
function go($m,$n){
	$n = min($m,$n);
	$r = $m%$n;
	if($r){
		return go($n,$r);
	}else{
		return $n;

	}
}

$rst = go(100,32);

echo go(99,22);
echo '----';
echo $rst;
