<?php
$a =1;
echo $a==1?:2;
die;
$content = '<p>asdada"这里是什么呢?"dad</p>';
echo htmlentities($content);
echo '<br>';
echo htmlspecialchars($content);
echo '<br>';
echo strip_tags($content);
die;
//数组乱序并且保持索引关系(选择题选项乱序)
$array = [1=>'a',2=>'b',3=>'cc',4=>'d'];
$len = count($array);
for ($i=0;$i<$len;$i++){
    $k = array_rand($array);
    $newArray[$k] = $array[$k];
    unset($array[$k]);
}
var_dump($newArray);
foreach ($a as $k=>$v) {
    //array_rand($a);
    /*if ($i == $right) {
        $a[$i] = $v;
        unset($b[$i]);
    }
    else {
        $b[$i] = $v;
    }
    $i++;*/
}
die;
phpinfo();
exit;
//echo '222';

//echo strtotime("20150627203607");

$jsondata = '{
    "CutOffset": 0,
    "Type": "2",
    "Width": 576,
    "Templates": [
        {
            "TemplateType": "1",
            "TemplateName": "\u9884\u7ed3\u5355
\u68c0\u6d4b",
            "Detector": [
                {
                    "ExclusionType": "1",
                    "Line": "24",
                    "Width": "163",
                    "Height": "32",
                    "Feature": "1f
8b0800000000000203ed98d10e802008457f29feffe77a702de4728d6ab6447d68ea148fbb88d8b6252f2291fea375f6e23c
662933a238a5b5600da951db76166247443d90d7ef7a1fe25c79e7c888da38abe3a2751b05bddacabc88ad98a86714742b35
5a0b1f9764887ea828a33d41717bdd85fe19a23e0c3cb068188bcd847e10b8074664d27049ed587fae6f3d2b62fdf5af7f8b
edbb8a153a1f622c8d8887100ce4ad43b4103f448c6e83b5590e8ebe8bf9d05c88abfce1ff057be9601e20df6b3f3ce28b2c7212449d49da9b5d0721c8ec771e1e90c060140000"
                },
                {
                    "ExclusionType": "1",
                    "Line": "-129",
                    "Width": "227",
                    "Height": "23",
                    "Feature": "1f8b0800000000000203ed96
e10a80200c845fc9bdffcbf543c26b3b4bc962930d223b0cf6c9d5ad94acacacc025a257f5ded3d99bf5e9aceb3a11ff83c4
9610c9ea42cb02bbb3eae688da9cd81ed799da0ec4a151b747d44d619b4cb76645c47639b26b24446292b11f796b8a596fce
a81cf52958867a9edc1e14714968689bf15818312a4374918b5b2322d4bdde1ff8f0301231113f098d15332afb2e1d854604c4d7f38d4dba9ece6618bdd7d9081e05f10057dadc6965140000"
                }
            ],
            "Data": [

        ],
            "showtimes_tail": "1",
            "showtimes_head": "1",
            "file_key": "DEV13069_e93b118f15f3465c9b0b40380b56e1ab",
            "offsets": "1",
            "ExpandNum": "1"
        },
        {
            "TemplateType": "2",
            "TemplateName": "\u7ed3\u5e10\u5355\u68c0\u6d4b",
            "Detector": [

        ],
            "Data": [

        ]
        },
        {
            "TemplateType": "3",
            "TemplateName": "\u4ea4\u73ed\u8868\u68c0\u6d4b",
            "Detector": [

        ],
            "Data": [

        ]
        }
    ]
}';

print_r($jsondata);
