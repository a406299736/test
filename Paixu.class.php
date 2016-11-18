<?php
class Paixu{
	//冒泡排序
	public function maopao($arr){
		if(!is_array($arr)){
			return false;	
		}
		$len = count($arr);
		for($i=1;$i<=$len;$i++){
			for($j=$len-1;$j>=$i;$j--){
				if($arr[$j-1]>$arr[$j]){
					$t = $arr[$j-1];
					$arr[$j-1] = $arr[$j];
					$arr[$j] = $t;
				}
			}	
		}
		return $arr;
	}

	//二分查找
	function twofen($arr,$x){
		if (!is_array($arr)){return false;}
		$start = 0;
		$end = count($arr)-1;
		while($start <= $end){
			$mid = intval(($start+$end)/2);
			if ($arr[$mid] == $x) return $mid.'--'.$arr[$mid];
			if ($arr[$mid] > $x) $end = $mid-1;
			if ($arr[$mid] < $x) $start = $mid+1;
		}
		return false;
	}

	//快速排序
	function fastPai($arr){
		//判断是否需要排序
		$length = count($arr);
		if($length<=1){
			return $arr;
		}

		//选择一个标尺
		//选择第一个元素
		$base = $arr[0];
		//遍历，除了标尺外的所有元素，按照大小关系放入两个数组内
		//初始化两个数组
		$left = array();//小于标尺的
		$right = array();//大于标尺的
		for($i=1;$i<$length;$i++){
			if($base > $arr[$i]){
				$left[] = $arr[$i];
			}else{
				$right[] = $arr[$i];
			}
		}
		//在分别对左边和右边的数组进行相同的排序处理方式
		//递归调用这个函数，并记录结果
		$left = fastPai($left);
		$right = fastPai($right);
		//合并左 标尺 右
		return array_merge($left,array($base),$right);
	}

}
 
?>
