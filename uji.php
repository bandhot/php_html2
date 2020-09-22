<?php

// $data="tes data";

// // komentar

// echo $data;

// $tester="break data";

// // echo phpinfo()

// for($mulai=10;$mulai<=1;$mulai--)
// {
//     if($mulai==6){
//     break;
//     }
//     echo $mulai;
// }


$angka=1;

// if($angka==)
// if($angka==="1")

// var_dump($angka=="1"); //1=="1"


// $ternary=(true) ?"benar" :"salah";

// echo $ternary;








// $berhenti=true;

// while($berhenti) //false
// {
//     $nama=readline("siapakah nama kamu ? ");

//     if($nama=="reyan")
//     {
//         $berhenti=false;
//         $break_point="===";
//     }else
//     {
//         echo "maaf kamu bukan mas reyhan\n";
//     }
// }

// aplikasi perhitungan

$keluar=true;

while($keluar)
{
    // banner aplikasi

    echo "aplikasi perhitungan !!!\n";
    
    // terima input dari user
    
    $angka_pertama=readline("masukan angka pertama  : ");
    $angka_kedua=readline("masukan angka kedua  :");  
    
    // validasi input 
    
    // if(!(int)$angka_pertama || !(int)$angka_kedua) //jika $angka_pertama bukan angka
    // {
    //     echo "maaf input hanya bisa angka !!!\n";
    //     continue;
    // }

    // if(!preg_match('/^[0-9]*$/',$angka_pertama)||(!preg_match('/^[0-9]*$/',$angka_kedua)))
    // {
    //     echo "opsi! input tidak dijanjikan...!";
    //     continue;
    // }


    if (!is_numeric ($angka_pertama) || !is_numeric ($angka_kedua))
     {
         echo "maaf input hanya bisa angka !! \n";
         continue;
     }
    
    // tampilkan hasil perhitugan

    echo "hasil dari $angka_pertama + $angka_kedua adalah : ".($angka_pertama+$angka_kedua)."\n";

    // cek logika user untuk mengulangi
    

    $ulangi=readline("ulangi lagi (yes/no) :");

    if($ulangi=="no" || $ulangi!=="yes")
    {
        $keluar=false;
    }
    // }if($ulangi=="yes"){
    //     $ulangi=true;
    // }else{
    // break;
    // }
    }
