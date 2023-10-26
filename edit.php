<?php
include("./config.php");

// cek apa tombol daftar udah di klik blom
if (isset($_POST['edit_data'])) {
    // ambil data dari form
    $id = $_POST['edit_id'];
    $desc = $_POST['edit_desc'];
    $numEmpl = $_POST['edit_num_empl'];
    $presu = $_POST['edit_presu'];
    $direc = $_POST['edit_direc'];
    $gerente = $_POST['edit_gerente'];
    $cel = $_POST['edit_cel'];
    $numDep = $_POST['edit_numDep'];


    // query
    $sql = "UPDATE tbl_depar SET descrip='$desc', numEmpl='$numEmpl', pres='$presu', direc='$direc',
    gerente='$gerente', cel='$cel', numDep='$numDep' WHERE id = '$id'";
    $query = mysqli_query($db, $sql);

    // cek apa query berhasil disimpan?
    if ($query)
        header('Location: ./index.php?update=sukses');
    else
        header('Location: ./index.php?update=gagal');
} else
    die("Akses dilarang...");
