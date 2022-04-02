<?php

    require_once('class_lingkaran.php');

    echo "Nilai PHI = " . Lingkaran::PHI . "<br>";
    $ling1 = new Lingkaran(16);
    $ling2 = new Lingkaran(17);

    echo "<br>";

    echo "Luas Lingkaran 1 : " . $ling1->getLuas() . "<br>";
    echo "Luas Lingkaran 2 : " . $ling2->getLuas() . "<br>";

    echo "<hr>";

    echo "Keliling Lingkaran 1 : " . $ling1->getKeliling() . "<br>";
    echo "Keliling Lingkaran 2 : " . $ling2->getKeliling() . "<br>";

?>