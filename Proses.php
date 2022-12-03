<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">

</head>

<body>
    <?php
    $Nama = $_POST['Nama'];
    $Kelas = $_POST['Kelas'];
    $Alamat = $_POST['Alamat'];
    $TempatLahir = $_POST['TempatLahir'];
    $TanggalLahir = $_POST['TAnggalLahir'];
    $JenisKelamin = $_POST['JenisKelamin']; {
    ?>

        <div class="container">
            <div class="row">
                <div class="class">
                    <div class="display-1">Haloo.. <?php echo $Nama; ?></div>
                    <p>Kamu berada di kelas <b> <?php echo $Kelas; ?></b></p>
                    Kamu beralamat di <b> <?php echo $Alamat; ?></b><br />
                    Tempat lahir <b> <?php echo $Nama; ?></b> di daerah <b> <?php echo $TempatLahir; ?></b>
                    <b> <?php echo $TanggalLahir; ?></b> merupakan tanggal kelahiran mu
                    dan jenis kelamin kamu adalah <b> <?php echo $JenisKelamin; ?></b>
                </div>
            </div>
        </div>
    <?php } ?>

    <link rel="stylesheet" href="js/bootstrap.min.js">
</body>

</html>