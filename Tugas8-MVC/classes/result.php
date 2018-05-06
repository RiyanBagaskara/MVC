<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/style.css" />
    <title>Biodata Lengkap</title>
</head>

<body>
    <?php
$extension = strtolower(pathinfo($file['pic']['name'], PATHINFO_EXTENSION));
$photo = "images/uploaded." . $extension;
if (file_exists($photo)) {
    unlink($photo);
}
move_uploaded_file($file['pic']['tmp_name'], $photo);
?>  
 
<div id="art-main">
    <form  class="register" enctype="multipart/form-data">
    <h1>Registration</h1>
    <h2>Biodata</h2>
        <fieldset class="row1">
            <legend>Account Details</legend>
            <p>
                <label>Nama Lengkap</label><br>
                <?php echo $_POST["nama_depan"] ?>
                <?php echo $_POST["nama_belakang"] ?>
            </p>
            <p>
                <label>Fakultas</label><br>
                <?php echo $fakultas; ?>
            </p>     
            <p>
                <label>Jenis Kelamin</label><br>
                <?php echo $_POST["jenis_kelamin"] ?>
            </p>
            <p>
                <label>Tempat Lahir</label><br>
                <?php echo $_POST["tempat_lahir"] ?>
            </p>
            <p>
                <label>Tanggal Lahir</label><br>
                <?php echo $_POST["tgl_lahir"] ?>
            </p>
            <p>
                <label>Nomor Indentitas</label><br>
                <?php echo $_POST["no_identitas"] ?>
            </p>    
            <p>
                <label>Alamat</label><br>
                <?php echo $_POST["alamat"] ?>
            </p>
        </fieldset>
        <fieldset class="row1">
            <legend>Further Information</legend>
            <p>
                <label>Email</label><br>
                <?php echo $_POST["email"] ?>
            </p>
            <p>
                <label>Nomor Telepon</label><br>
                <?php echo $_POST["no_telp"] ?>
            </p>
            <p> 
                <label>Pendidikan</label><br>
                <?php echo $_POST["pendidikan"] ?>
                </p>
                <p>
                <label>Hobi</label><br>
                <?php
                    if(isset($_POST['upload'])){
                    if(!empty($_POST['hobi'])){
                    // Perulangan untuk menampilkan checkbox yang dipilih.
                    foreach($_POST['hobi'] as $selected){
                    echo $selected."</br>";
                    }
                    }
                    }
                ?>
                
                </p>
                <p>
                <label>Berkas Pendukung:</label><br>
                    <div>
                     <img class="berkas-pendukung" src="<?php echo "../../$photo" ?>" alt="Pas Foto">
                    </div>
                </p>
        </fieldset>
        <fieldset class="row1">
            <legend>Go Back</legend>
                <p>
                <a href="viewform" class="btn btn-info" role="button">Kembali ke halaman input &raquo; </a></p>
        </fieldset>
    </form>
</body>
</html>
