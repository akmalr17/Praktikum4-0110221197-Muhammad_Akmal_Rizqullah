<?php
    require_once('class_mahasiswa.php');

    $mahasiswa = new Mahasiswa(67778,"UDIN","TI",2020,4);

    echo "NIM Mahasiswa : " . $mahasiswa->nim . "<br>";
    echo "Nama Mahasiswa : " . $mahasiswa->nama . "<br>";
    echo "Prodi Mahasiswa : " . $mahasiswa->prodi . "<br>";
    echo "Tahun Angkatan : " . $mahasiswa->angkatan ."<br>";
    echo "Predikat IPK : " . $mahasiswa->predikat_ipk();
?>