<?php

$mdString = md5(18610316439 . 1655);
$verifyCode = strtolower(substr($mdString, 0, 4));
echo $verifyCode;
die;
$a = [1,5,9,0];
$b = 5;
if (in_array($b,$a)) {
  $c = array_diff($a,[$b]);
}
$d = array_pop($a);
echo $d;
die;

class A 
{
  protected function t()
  {
    echo 'A';
  }
}
class B extends A
{
  public function r()
  {
    parent::t();
    echo 'B';
  }
}

$b = new B();
$b->r();
die;
$a = [1,3,4,5,6,2,6,7,8,10];
foreach ($a as $value) {
  if ($value == 5) {
    goto here;
  }
  echo '--' . $value;
}

here:
  echo 'here' . $value;
die;
$a = [
  1 => [
    ['name' => '111'],
    ['age' => 'nv']
  ],
  2 => [
    ['name' => '222'],
    ['age' => 'nan'],
  ],
];

$b = [
  1 => ['name' => '111','age' => 'nv'],
  2 => ['name' => '222','age' => 'nv'],
];

var_dump(json_encode($a));
die;
$a = '1986-01-21';
echo intval((time() - strtotime($a))/(365 * 24 * 3600));
die;
$mobile = '18610316439';
$int = 1618;
$string = md5($mobile . $int);
echo $string . '----';
echo strtolower(substr($string,0,4));
die;
$a or $a = 3;
echo $a;

die;
$a = 1;
$b = 2;
$c = 3;
echo $a == 1 ? '男' : ($a == 2 ? '女' : '');
die;
//php7新特性中的严格模式
//declare(strict_types=1);

function s(int $a,string $b): int {
	return [$a,$b];
}
var_dump(s(1,"2"));

die;
phpinfo();
die;
$a = ['a'=>1,'b'=>1,'c'=>3,'q'=>9,'w'=>3,'e'=>7];
$c = array_flip($a);//key value 互换
echo '<pre>';
var_dump($c);
echo '</pre>';
exit();
$a = ['a'=>1,'b'=>2,'c'=>3];
$b = ['q'=>9,'w'=>8,'e'=>7];
$d = [['a'=>1,'b'=>2,'c'=>3],['a'=>9,'b'=>8,'c'=>7]];
$c = array_map(function($a){
    return $a['a'];
},$d);
var_dump($c);
/*array(2) {
  [0]=>
  int(1)
  [1]=>
  int(9)
}*/
exit();
$c = array_map(function($a,$b){
    return [$a => $b];
},$a,$b);
var_dump($c);
/*array(3) {
  [0]=>
  array(1) {
    [1]=>
    int(9)
  }
  [1]=>
  array(1) {
    [2]=>
    int(8)
  }
  [2]=>
  array(1) {
    [3]=>
    int(7)
  }
}*/

exit();
$aa = [2,4,99766645,6,7,9,45533,2,121,0,22,33];
$bb = [33,4,99766645,6,2,'9',45533,7,121,0,22,2];
//$a2 = natsort($a);
usort($aa,function($a,$b){
    if ($a == $b) {
        return 0;
    }
    //从大到小排列
    //return ($a < $b) ? 1 : -1;

    //从小到大排列
    return ($a > $b) ? 1 : -1;
});
usort($bb,function($a,$b){
    if ($a == $b) {
        return 0;
    }
    //从小到大排列
    return ($a < $b) ? -1 : 1;
});
var_dump($aa);
if ($aa == $bb) echo 111;//输出111
