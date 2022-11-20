<?php
    //percobaan if else dengan kurung kurawa dan tanpa kurung kurawa
    //if else tanpa kurung kurawa hanya bisa 1 statement sedangkan untuk yang memakai kurung kurawa bisa lebih dari 1 statement

    //dengan kurung kurawa
    $nilai = 79;

    if ($nilai > 90) {
        echo "Nilai A Lulus Predikat Baik" . PHP_EOL;
    } else if ($nilai > 80) {
        echo "Nilai B Anda Lulus" . PHP_EOL;
    } else if ($nilai >70) {
        echo "nilai C Remidi" . PHP_EOL;
    } else if ($nilai > 60) {
        echo "nilai D Terancam Tidak Lulus" . PHP_EOL;
    } else {
        echo "nilai F Anda Tidak lulus" . PHP_EOL;
    }

?>