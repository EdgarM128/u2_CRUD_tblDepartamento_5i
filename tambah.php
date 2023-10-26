<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['tambah'])) {
    // ambil data dari form
    $desc = $_POST['desc'];
    $numEmpl = $_POST['numEmpl'];
    $cel = $_POST['cel'];
    $pres = $_POST['pres'];
    $gerente = $_POST['gerente'];
    $numDep = $_POST['num_depar'];
    $direc = $_POST['direc'];

    // query
    $sql = "INSERT INTO tbl_depar(descrip, numEmpl, pres, direc, gerente, cel, numDep)
    VALUES('$desc', '$numEmpl', '$pres', '$direc', '$gerente', '$cel', '$numDep')";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?status=sukses');
    else
        header('Location: ./index.php?status=gagal');
} else
    die("Akses dilarang...");
