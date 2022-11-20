<?php
    $counter = 0;

    while ($counter <= 10) {
        echo $counter . " ";
        $counter++;
        //$counter+=2; //untuk data genap
    }

    //false or true
    $a = 1;

    //pada bagian kondisi bisa diisi false atau true
    //false = tidak bisa
    //true = bisa
    while (false) {
        echo $a . " ";
        $a++;
    }

    echo PHP_EOL;
    echo "<br>";
    echo "<br>";
    echo PHP_EOL;

    //break and continue
    //break
    $b = 1;
    while (true) {
        echo $b . " ";

        if ($b == 10) {
            break;
        }
        $b++;
    }
    echo PHP_EOL;
    echo "<br>";
    echo "<br>";
    echo PHP_EOL;

    //continue
    for ($i=1; $i <= 10  ; $i++){
        //angka melewati angka genap
        if ($i % 2 == 0) {
            continue; //berarti dilewati jika dibagi 2 habis tanpa sisa
        }
        echo "Hello continue " . $i . PHP_EOL;
        echo "<br>";
    }
    /*
    output :
    Hello continue 1
    Hello continue 3
    Hello continue 5
    Hello continue 7
    Hello continue 9
    */

    echo "<br>";
    echo PHP_EOL;

    echo "Program selesai";


    // 1 2 3 4 5 6 7 8 9 10 
?>
