<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Mahasiswa Baru | POLITEKNIK NEGERI MADIUN</title>
</head>

<body>
    <header>
         <h3>Pendaftaran Mahasiswa Baru</h3>
         <h1>POLITEKNIK NEGERI MADIUN </h1>
    </header>

    <h4>Menu</h4>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Pendaftaran mahasiswa baru berhasil!";
                } else {
                    echo "Pendaftaran gagal!";
                }
            ?>
        </p>
    <?php endif; ?>
    </body>
</html>