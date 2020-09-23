<?php


//Buat function eleciusTofharentheit
// Rumus (NIlai Celsius *9/5)+32
// parameter function int celcius
// invoke function celciusToFarhenhetit(12);//print 53,6

function celciusTofahrenheit($celcius){
    $conversi=($celcius*9/5)+32;
    echo "$celcius celcius=$conversi ";
}
// celciusTofahrenheit(80);