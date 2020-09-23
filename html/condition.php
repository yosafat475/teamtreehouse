<?php
$tanya=readline("Pilih nama (yes/no) ?");

if($tanya=="yes"){
    echo "kamu memilih yes";
}elseif($tanya=="no"){
echo "kamu memilih no";
}
elseif($tanya=="maybe"){  
    echo "kamu memilih maybe";
}
else//jika tidak memilih yes/no/maybe (tidak dalam pilihan yg tersedia )
{
    echo "kamu tidak memilih persediaan yg tersedia !!";
}

echo PHP_EOL;

$menu=readline("pilih angka 1-3 ?");

switch($menu){
    case 1;              //jika user meng input angka satu
    echo "anda memilih angka 1";
break;          //kenapa di break karena kalau tidak dia langsung mengakses default
    case 2;
    echo "anda memilih angka 2";
break;          //jadi setiap case ada break
    case 3;
    echo "anda memilih angka 4";
break;
default:                //jika user tidak meng input angka yg tersedia
echo "anda tidak memilih pilihan yg tersedia";
}  