<?php

//buat function askName
//parameternya $nama
//askName("Ahmad Dani");//Namamu adalah Ahmad Dani

function askName($nama){
    $format_nama=ucwords(strtolower($nama));
    echo "namamu adalah $format_nama";
}
    
// askName("Ahmad Dani Prasetyo");

  
