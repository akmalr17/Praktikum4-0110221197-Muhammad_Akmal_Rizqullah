<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous"
    />
    <script 
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
<nav class="m-3 navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">WEB02</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Review PHP
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
            </li>
        </ul>
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                PHP5 OOP
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
                <li><a class="dropdown-item" href="#">-</a></li>
                <li><a class="dropdown-item" href="#">-</a></li>
            </ul>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <hr>
    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            Form Nilai Ujian
        </h3>
        <hr>
        <form action="nilaiujian.php" method="POST" autocomplete="off">
            <div class="form-group row">
                <label for="text" class="col-4 col-form-label">NIM</label> 
                <div class="col-8">
                <input id="nim" name="nim" type="text" placeholder="Masukkan NIM anda" class="form-control">
                </div>
            </div>
            <div class="form-group row">
                <label for="select" class="col-4 col-form-label">Pilih Mata Kuliah</label> 
                <div class="col-8">
                <select id="matkul" name="matkul" class="custom-select">
                    <option value="pw">Pemrograman Web</option>
                    <option value="bd">Basis Data</option>
                    <option value="jarkom">Jaringan Komputer</option>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="text1" class="col-4 col-form-label">Nilai</label> 
                <div class="col-8">
                <input id="nilai" name="nilai" type="text" class="form-control">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="proses" type="submit" class="btn btn-dark">Simpan</button>
                </div>
            </div>
            </form>
    </div>
    <div class="m-5 border border-secondary p-3 rounded">
        <?php
            require_once('class_nilaimahasiswa.php');

            if(isset($_POST['proses'])){
                $mahasiswa = new NilaiMahasiswa ($_POST['matkul'], $_POST['nilai'], $_POST['nim']);

                switch($_POST['matkul']){
                    case "pw" : $kuliah = "Pemrograman Web"; break;
                    case "bd" : $kuliah = "Basis Data"; break;
                    case "jarkom" : $kuliah = "Jaringan Komputer"; break;
                    default : "";
                }

                echo "NIM : " . $nim = $_POST['nim'] . "<br>";
                echo "Nama Mata Kuliah : " . $kuliah . "<br>";
                echo "Nilai : " . $nilai = $_POST['nilai'] . "<br>";
                echo "Grade : " . $mahasiswa->grade() . "<br>";
                echo "Hasil Ujian : " . $mahasiswa->hasil() . "<br>";
            }
        ?>
    </div>
</body>
</html>