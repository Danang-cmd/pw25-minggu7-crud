<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Anggota</title>
    <link href="style2.css" rel="stylesheet">

</head>
<body>
<div class="container">
    <?php

    include "koneksi.php";

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_GET['id_peserta'])) {
        $id_peserta=input($_GET["id_peserta"]);

        $sql="select * from crud_044 where id_peserta=$id_peserta";
        $hasil=mysqli_query($connection,$sql);
        $data = mysqli_fetch_assoc($hasil);


    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $id_peserta=htmlspecialchars($_POST["id_peserta"]);
        $nama=input($_POST["nama"]);
        $sekolah=input($_POST["sekolah"]);
        $jurusan=input($_POST["jurusan"]);
        $no_hp=input($_POST["no_hp"]);
        $alamat=input($_POST["alamat"]);

        $sql="update crud_044 set
			nama='$nama',
			sekolah='$sekolah',
			jurusan='$jurusan',
			no_hp='$no_hp',
			alamat='$alamat'
			where id_peserta=$id_peserta";

        $hasil=mysqli_query($connection,$sql);

        if ($hasil) {
            header("Location:index.php");
        }
        else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";

        }

    }

    ?>
    <h2>Edit Data</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label>Nama:</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required />
        </div>
        <div class="form-group">
            <label>Sekolah:</label>
            <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" required/>
        </div>
        <div class="form-group">
            <label>Jurusan :</label>
            <input type="text" name="jurusan" class="form-control" placeholder="Masukan Jurusan" required/>
        </div>
        <div class="form-group">
            <label>No HP:</label>
            <input type="text" name="no_hp" class="form-control" placeholder="Masukan No HP" required/>
        </div>
        <div class="form-group">
            <label>Alamat:</label>
            <textarea name="alamat" class="form-control" rows="5"placeholder="Masukan Alamat" required></textarea>
        </div>

        <input type="hidden" name="id_peserta" value="<?php echo $data['id_peserta']; ?>" />

        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>