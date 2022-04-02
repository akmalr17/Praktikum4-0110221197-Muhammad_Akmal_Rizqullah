<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
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

    <?php
        require_once('class_mahasiswa.php');

        $mahasiswa1 = new Mahasiswa(10001,"Alpi","TI",2020,4);
        $mahasiswa2 = new Mahasiswa(10002,"Bagas","SI",2021,3.5);
        $mahasiswa3 = new Mahasiswa(10003,"Bambang","SI",2020,2.9);
        $mahasiswa4 = new Mahasiswa(10004,"sumijon","TI",2019,3.8);
    ?>

    <div class="m-5 border border-secondary p-3 rounded">
        <h3>
            Daftar Mahasiswa
        </h3>
        <table class="table table-bordered border-light table-dark table-striped">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <th scope="col">Prodi</th>
                <th scope="col">Tahun Angkatan</th>
                <th scope="col">IPK</th>
                <th scope="col">Predikat</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>
                    <?php
                        echo $mahasiswa1->nim;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa1->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa1->prodi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa1->angkatan;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa1->ipk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa1->predikat_ipk();
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>
                    <?php
                        echo $mahasiswa2->nim;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa2->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa2->prodi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa2->angkatan;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa2->ipk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa2->predikat_ipk();
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>
                    <?php
                        echo $mahasiswa3->nim;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa3->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa3->prodi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa3->angkatan;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa3->ipk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa3->predikat_ipk();
                    ?>
                </td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>
                    <?php
                        echo $mahasiswa4->nim;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa4->nama;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa4->prodi;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa4->angkatan;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa4->ipk;
                    ?>
                </td>
                <td>
                    <?php
                        echo $mahasiswa4->predikat_ipk();
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</body>
</html>