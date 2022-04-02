<?php

    require_once('class_ppanjang.php');

    $persegipanjang1 = new PersegiPanjang(16,5);
    $persegipanjang2 = new PersegiPanjang(17,7);

    echo "Luas Persegi Panjang 1 = " . $persegipanjang1->getLuas() . "<br>";
    echo "Keliling Persegi Panjang 1 = " . $persegipanjang1->getKeliling() . "<br>";

    echo "<hr>";

    echo "Luas Persegi Panjang 2 = " . $persegipanjang2->getLuas() . "<br>";
    echo "Keliling Persegi Panjang 2 = " . $persegipanjang2->getKeliling() . "<br>";


?>