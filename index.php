<?php include("./config.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Belajar Dasar CRUD dengan PHP dan MySQL">
    <title> PlayStation </title>

    <!-- bootstrap cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- material icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="./css/style.css">
</head>

<body class="bg-light">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom" style="position: sticky !important;
    top: 0 !important; z-index : 99999 !important;">
        <div class="container-fluid container">
            <a class="navbar-brand" href="#">PlayStation</a>
        </div>
    </nav>


    <div class="container mt-5">
        <!-- form tambah mahasiswa -->
        <div class="card mb-5">
            <!-- <div class="card-header">
                Latihan CRUD PHP & MySQL
            </div> -->
            <!-- tambah data -->
            <div class="card-body">
                <h3 class="card-title">Playstation</h3>
                <p class="card-text">Agrega datos acerca de las ubicaciones de los departamentos que ocupamos</p>
                <p class="card-text"> Hecho por: Edgar Emilio Meraz Acosta, Grupo: 5-i, Especialidad: Programacion </p>

                <?php if (isset($_GET['status'])) : ?>
                    <?php
                    if ($_GET['status'] == 'sukses')
                        echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Hecho!</strong> Registro insertado!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    else
                        echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Algo salio mal!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
                    ?>
                <?php endif; ?>


                <form class="row g-3" action="tambah.php" method="POST">

                    <div class="col-12">
                        <label for="nama" class="form-label">Descripcion del departamento</label>
                        <input type="text" name="desc" class="form-control" placeholder="descripcion visual" required>
                    </div>
                    <div class="col-md-4">
                        <label for="NIM" class="form-label">Numero de empleados</label>
                        <input type="text" name="numEmpl" class="form-control" placeholder="0123456789" required>
                    </div>

                    <div class="col-md-4">
                        <label for="Agama" class="form-label">Gerente asociado</label>
                        <select class="form-select" name="gerente" aria-label="Default select example">
                            <option value="Edgar Meraz">Edgar Meraz</option>
                            <option value="Valdez Martinez">Valdez Martinez</option>
                            <option value="Irvin Moreno">Irvin Moreno</option>
                            <option value="Reyna Molina">Reyna Molina</option>
                            <option value="Alonso Rivas">Alonso Rivas</option>
                            <option value="Uriel Rivas">Uriel Rivas</option>
                        </select>
                    </div>

                    <div class="col-md-4">
                        <label for="NIM" class="form-label">Presupuesto anual</label>
                        <input type="text" name="pres" class="form-control" placeholder="0123456789" required>
                    </div>

                    <div class="col-md-6">
                        <label for="Jurusan" class="form-label">Numero de departamento</label>
                        <input type="text" name="num_depar" class="form-control" placeholder="1235" required>
                    </div>

                    <div class="col-md-6">
                        <label for="IPK" class="form-label">Telefono</label>
                        <input type="int" name="cel" class="form-control" placeholder="656 789 0151" required>
                    </div>

                    <div class="col-12">
                        <label for="nama" class="form-label">Direccion</label>
                        <input type="text" name="direc" class="form-control" placeholder="direccion" required>
                    </div>

                    <div class="col-12">
                        <button type="submit" class="btn btn-primary" value="daftar" name="tambah"><i class="fa fa-plus"></i><span class="ms-2">Agregar a la base de datos</span></button>
                    </div>
                </form>
            </div>
        </div>


        <!-- judul tabel -->
        <h5 class="mb-3">Tabla de departamentos</h5>

        <div class="row my-3">
            <div class="col-md-3 ms-auto">
                <div class="input-group mb-3 ms-auto">
                    <input type="text" class="form-control" placeholder="Buscar por ID" aria-label="cari" aria-describedby="button-addon2">
                    <button class="btn btn-primary" type="button" id="button-addon2"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </div>


        <!-- tampilkan pesan sukses dihapus -->
        <?php if (isset($_GET['hapus'])) : ?>
            <?php
            if ($_GET['hapus'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Hecho!</strong> Registro eliminado de la base de datos!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Algo salio mal!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tampilkan pesan sukses di edit -->
        <?php if (isset($_GET['update'])) : ?>
            <?php
            if ($_GET['update'] == 'sukses')
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong> Hecho!</strong> base de datos actualizada!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            else
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                        <strong>Ups!</strong> Algo salio mal!
                        <button type='button' class='btn-close' onclick='clicking()' data-bs-dismiss='alert' aria-label='Close'></button>
                      </div>";
            ?>
        <?php endif; ?>

        <!-- tabel -->
        <div class="table-responsive mb-5 card">
            <?php
            echo "<div class='card-body'>";

            echo "<table class='table table-hover align-middle bg-white'>";
            echo "<thead>";
            echo "<tr>";
            echo "<th scope='col' class='text-center'>ID</th>";
            echo "<th scope='col'>Descripcion</th>";
            echo "<th scope='col'>Numero de Empleados</th>";
            echo "<th scope='col'>Presupuesto anual</th>";
            echo "<th scope='col'>Direccion</th>";
            echo "<th scope='col'>Gerente</th>";
            echo "<th scope='col'>Celular</th>";
            echo "<th scope='col'>Numero de departamento</th>";
            echo "<th scope='col' class='text-center'>Acciones</th>";
            echo "</tr>";
            echo "</thead>";
            echo "<tbody>";

            $data_mhs = mysqli_query($db, "SELECT * FROM tbl_depar");

            while ($mahasiswa = mysqli_fetch_array($data_mhs)) {
                echo "<tr>";
                echo "<td>" . $mahasiswa['id'] . "</td>";
                echo "<td>" . $mahasiswa['descrip'] . "</td>";
                echo "<td>" . $mahasiswa['numEmpl'] . "</td>";
                echo "<td>" . $mahasiswa['pres'] . "</td>";
                echo "<td>" . $mahasiswa['direc'] . "</td>";
                echo "<td>" . $mahasiswa['gerente'] . "</td>";
                echo "<td>" . $mahasiswa['cel'] . "</td>";
                echo "<td>" . $mahasiswa['numDep'] . "</td>";

                echo "<td class='text-center'>";
                ?>
                <!-- Enlace para editar -->
                <button type='button' class='btn btn-primary editButton pad m-1' data-id="<?php echo $mahasiswa['id']; ?>"><span class='material-icons align-middle'>edit</span></button>
                <!-- Enlace para eliminar -->
                <button type='button' class='btn btn-danger deleteButton pad m-1' data-id="<?php echo $mahasiswa['id']; ?>"><span class='material-icons align-middle'>delete</span></button>
                <?php
                echo "</td>";

                echo "</tr>";
            }

            echo "</tbody>";
            echo "</table>";
            echo "</div>";
            ?>
        </div>


        <!-- Modal Edit-->
        <div class='modal fade' style="top:58px !important;" id='editModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog' style="margin-bottom:100px !important;">
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Editar datos </h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>

                    <?php
                    $sql = "SELECT * FROM tbl_depar";
                    $query = mysqli_query($db, $sql);
                    $mahasiswa = mysqli_fetch_array($query);
                    ?>

                    <form action='edit.php' method='POST'>
                        <div class='modal-body text-start'>
                            <input type='hidden' name='edit_id' id='edit_id'>

                            <div class="col-12 mb-3">
                                <label for="edit_desc" class="form-label"> Descripcion del edificio </label>
                                <input type="text" name="edit_desc" id="edit_desc" class="form-control" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_num_empl" class="form-label"> Numero de empleados </label>
                                <input type="text" name="edit_num_empl" id="edit_num_empl" class="form-control" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_gerente" class="form-label"> Gerente asociado </label>
                                <select class="form-select" name="edit_gerente" id="edit_gerente" aria-label="Default select example">
                                    <option value="Edgar Meraz">Edgar Meraz</option>
                                    <option value="Valdez Martinez">Valdez Martinez</option>
                                    <option value="Irvin Moreno">Irvin Moreno</option>
                                    <option value="Reyna Molina">Reyna Molina</option>
                                    <option value="Alonso Rivas">Alonso Rivas</option>
                                    <option value="Uriel Rivas">Uriel Rivas</option>
                                </select>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_presu" class="form-label"> Presupuesto anual </label>
                                <input type="text" name="edit_presu" id="edit_presu" class="form-control" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_direc" class="form-label"> Direccion </label>
                                <input type="text" name="edit_direc" class="form-control" id="edit_direc" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_cel" class="form-label"> Numero de celular </label>
                                <input type="text" name="edit_cel" id="edit_cel" class="form-control" required>
                            </div>

                            <div class="col-12 mb-3">
                                <label for="edit_numDep" class="form-label"> Numero de departamento </label>
                                <input type="text" name="edit_numDep" class="form-control" id="edit_numDep" required>
                            </div>

                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='edit_data' class='btn btn-primary'>Editar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- Modal Delete-->
        <div class='modal fade' style="top:58px !important;" id='deleteModal' tabindex='-1' aria-labelledby='exampleModalLabel' aria-hidden='true'>
            <div class='modal-dialog'>
                <div class='modal-content'>
                    <div class='modal-header'>
                        <h5 class='modal-title' id='exampleModalLabel'>Confirmacion</h5>
                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                    </div>


                    <form action='hapus.php' method='POST'>

                        <div class='modal-body text-start'>
                            <input type='hidden' name='delete_id' id='delete_id'>
                            <p>Seguro que quieres eliminar este registro?</p>
                        </div>

                        <div class='modal-footer'>
                            <button type='submit' name='deletedata' class='btn btn-primary'>Confirmar</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>


        <!-- tutup container -->
    </div>


    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Javascript bule with popper bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- sweet alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- edit function -->
    <script>
        $(document).ready(function() {
            $('.editButton').on('click', function() {
                $('#editModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#edit_id').val(data[0]);
                $('#edit_desc').val(data[1]);
                $('#edit_num_empl').val(data[2]);
                $('#edit_gerente').val(data[5]);
                $('#edit_presu').val(data[3]);
                $('#edit_direc').val(data[4]);
                $('#edit_cel').val(data[6]);
                $('#edit_numDep').val(data[7]);
            });
        });
    </script>

    <!-- delete function -->
    <script>
        $(document).ready(function() {
            $('.deleteButton').on('click', function() {
                $('#deleteModal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function() {
                    return $(this).text();
                }).get();

                console.log(data);
                $('#delete_id').val(data[0]);
            });
        });
    </script>

    <script>
        function clicking() {
            window.location.href = './index.php';
        }
    </script>
</body>

</html>