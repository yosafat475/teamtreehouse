<?php

function tes($nama){
    return $nama;
}
echo tes("yosafat");
// echo "Hello, world!";
function bubble_sort($arr) {
    $size = count($arr)-1;
    for ($i=0; $i<$size; $i++) {
        for ($j=0; $j<$size-$i; $j++) {
            $k = $j+1;
            if ($arr[$k] < $arr[$j]) {
                // Swap elements at indices: $j, $k
                list($arr[$j], $arr[$k]) = array($arr[$k], $arr[$j]);
            }
        }
    }
    return $arr;
}
$data=[2, 4, 8, 8, 9, 10, 14, 20, 100, 101, 4, 5  ];

print_r(bubble_sort($data));

for ($i=1; $i<=5; $i++){
  for($n=$i; $n>=1; $n--){
    echo '*';
  }echo PHP_EOL;

}
for ($i=5; $i>=1; $i--){
  for($n=$i; $n>=1; $n--){
    echo '*';
  }echo PHP_EOL;

}