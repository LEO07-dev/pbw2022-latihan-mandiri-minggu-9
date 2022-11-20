<?php
    //Penggunaan switch pada PHP
    //hanya bernilai '=='
    //diberi break tiap case
    
    //value dari variable
    $nilai = "A";

    //bagian switch
    switch ($nilai) {
        case 'A':
            echo "Anda Lulus Dengan Baik";
            break;

        case 'B': // if($nilai == 'B" || $nilai == 'C') or

        case 'C':
            echo "Anda Lulus";
            break;
        
        default:
            echo "Anda kurang belajar";
            break;
    }





?>