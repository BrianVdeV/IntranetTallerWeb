<?php
include_once('php/conexion.php');
include_once('php/funciones.php');
session_start();
revisa_login();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Entradas - Cultivos del Sol</title>
    <link rel="shortcut icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <?php include_once('inc/nav.php'); ?>
    <div id="layoutSidenav">
        <?php include_once('inc/sidenav.php'); ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Registro de Entradas</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Entradas</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="formulario">
                                <form>
                                    <div class="form-group">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre del empleado">
                                    </div>
                                    <div class="form-group">
                                        <label for="hora_entrada">Hora de Entrada:</label>
                                        <input type="time" class="form-control" id="hora_entrada">
                                    </div>
                                    <div class="form-group">
                                        <label for="hora_salida">Hora de Salida:</label>
                                        <input type="time" class="form-control" id="hora_salida">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Registro de Empleados
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Empleados</th>
                                        <th>Puesto</th>
                                        <th>Edad</th>
                                        <th>Hora de Entrada</th>
                                        <th>Hora de Salida</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Jorge</td>
                                        <td>Admistración</td>
                                        <td>61</td>
                                        <td>08:30</td>
                                        <td>12:30</td>
                                    </tr>
                                    <tr>
                                        <td>Juan</td>
                                        <td>Carga</td>
                                        <td>63</td>
                                        <td>08:30</td>
                                        <td>13:30</td>
                                    </tr>
                                    <tr>
                                        <td>Perez</td>
                                        <td>Admistración</td>
                                        <td>66</td>
                                        <td>08:30</td>
                                        <td>18:30</td>
                                    </tr>
                                    <tr>
                                        <td>Tomate</td>
                                        <td>Gerente</td>
                                        <td>22</td>
                                        <td>08:30</td>
                                        <td>17:30</td>
                                    </tr>
                                    <tr>
                                        <td>Yuca</td>
                                        <td>Admistración</td>
                                        <td>33</td>
                                        <td>08:30</td>
                                        <td>19:30</td>
                                    </tr>
                                    <tr>
                                        <td>Papa</td>
                                        <td>Admistración</td>
                                        <td>61</td>
                                        <td>08:30</td>
                                        <td>16:30</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include_once('inc/footer.php'); ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
    <script src="js/datatables-simple-demo.js"></script>
</body>

</html>