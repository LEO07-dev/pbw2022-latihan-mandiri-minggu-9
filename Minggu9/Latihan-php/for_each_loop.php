<?php
    //menampilkan tiap data dalam array
    //for each loop
    $kelas = array("web 1", "web 2", "web 3", "web 4", "web 5", "web 6");

    //melakukan extract dari array $kelas ke dalam variable $kelasweb
    foreach ($kelas as $kelasweb) {
        echo "kelompok $kelasweb";
        echo PHP_EOL;
        echo "<br>";
    }

    /*
    output :
    kelompok web 1
    kelompok web 2
    kelompok web 3
    kelompok web 4
    kelompok web 5
    kelompok web 6
    */

    echo PHP_EOL;
    echo "<br>";
    echo "<br>";
    echo PHP_EOL;

    //for each loop dengan key
    $person = [
        "firstName" => "Joko",
        "lastName" => "Tingkir",
        "address" => "Semarang",
        "age" => 25
    ];

    //melakikan extract key&value dari array $person
    foreach ($person as $key => $value) {
        echo "$key: $value" . PHP_EOL;
        echo "<br>";
    }

    /*
    output :
    firstName: Joko
    lastName: Tingkir
    */

    echo PHP_EOL;
    echo "<br>";
    echo "<br>";
    echo PHP_EOL;


    //coba sendiri
    //pada bagian "nama " ,-- harus beda tiap isinya jika sama seperti di bawah
    /*
        "nama" => "A",
        "nama" => "B",
        "nama" => "C",
        "nama" => "D",
        "nama" => "E"
        
        output :
        Hanya nama: E
        //diambil dari yang paling terakhir
    */
    $people = [
        "nama 1" => "A",
        "nama 2" => "B",
        "nama 3" => "C",
        "nama 4" => "D",
        "nama 5" => "E" 
    ];

    $no = array(1, 2, 3, 4, 5);

    foreach ($people as $key => $value) {
        echo "$key: $value" . PHP_EOL;
        echo "<br>";
    }

    


?>