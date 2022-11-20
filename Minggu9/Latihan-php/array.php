<?php
    //dalam array bisa dimasuki bergam jenis nilai dengan tipe data yang berbeda-beda
    
    $array = array(1, 2, 3, 4, 5, "nama", 1.2);
    //var_dump($array); //untuk menampilkan semua nilai dalam variable
    //cuman ingin menampilkan nilai tertentu dalam array 
    //menggunakan indeks
    //indeks dimulai dari 0
    //var_dump($array[5]); //meampilkan data tertentu
    var_dump(count($array)); //menampilkan jumlah data

    echo PHP_EOL;
    echo "<br>";
    echo "<br>";
    echo PHP_EOL;   

    $f1teams = ["RedBull", "Ferrari", "Mercedes"];
    var_dump($f1teams);
?>