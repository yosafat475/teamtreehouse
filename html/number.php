<?php

$number=1;

$float=1.2;

$int_float=(int)$float;

$str_float=(string)$float;

$str_boolean=(bool)$float;

var_dump($str_boolean);

function kali(int $satu,int $dua):int{
    return $satu*$dua;
}  
/**
 * OPerator
 * subtract(-)
 * addition(+)
 * divide(/)
 * modulus(%)
 * increment(++)
 * decrement(--)
 * 
 */
echo 4/2;//2
echo PHP_EOL;
echo 4%2;//0

$angka=1;//1
$angka++;//2
$angka--;//1
$angka+=9;//10
$angka/=5;//2
$angka.=7;//2&7 atau 27
// semisal
$angka.="tuju";

echo PHP_EOL;
echo $angka;

$a=5;

// var_dump()
// durung lebar