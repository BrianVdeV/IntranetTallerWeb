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
    <title>Exportaciones - Cultivos del Sol</title>
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
                    <h1 class="mt-4">Registro de Exportaciones</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                        <li class="breadcrumb-item active">Exportaciones</li>
                    </ol>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="formulario">
                                <div class="product-container">
                                    <div class="product">
                                        <img src="https://plazavea.vteximg.com.br/arquivos/ids/20372457-450-450/64576.jpg?v=638023231236300000" alt="Palta">
                                    </div>
                                    <div class="product">
                                        <img src="https://plazavea.vteximg.com.br/arquivos/ids/646178-450-450/88406.jpg?v=637443514194630000" alt="Yuca">
                                    </div>
                                    <div class="product">
                                        <img src="https://plazavea.vteximg.com.br/arquivos/ids/1265150-450-450/124903.jpg?v=637520242280830000" alt="Papa">
                                    </div>
                                    <div class="product">
                                        <img src="https://plazavea.vteximg.com.br/arquivos/ids/518590-450-450/60769.jpg?v=637417681802200000" alt="Tomate">
                                    </div>
                                </div>
                                <form>
                                    <div class="form-group">
                                        <label for="cantidad">Cantidad:</label>
                                        <input type="number" class="form-control" id="cantidad" placeholder="Ingrese la cantidad exportada">
                                    </div>
                                    <div class="form-group">
                                        <label for="destino">Destino:</label>
                                        <input type="text" class="form-control" id="destino" placeholder="Ingrese el país de destino">
                                    </div>
                                    <div class="form-group">
                                        <label for="fecha">Fecha:</label>
                                        <input type="date" class="form-control" id="fecha">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Registrar</button>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Registro de Exportaciones
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Producto</th>
                                        <th>Destino</th>
                                        <th>Cantidad</th>
                                        <th>Fecha</th>
                                        <th>Precio</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Palta</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011/04/25</td>
                                        <td>$320,800</td>
                                    </tr>
                                    <tr>
                                        <td>Yuca</td>
                                        <td>Tokyo</td>
                                        <td>63</td>
                                        <td>2011/07/25</td>
                                        <td>$170,750</td>
                                    </tr>
                                    <tr>
                                        <td>Tomate</td>
                                        <td>San Francisco</td>
                                        <td>66</td>
                                        <td>2009/01/12</td>
                                        <td>$86,000</td>
                                    </tr>
                                    <tr>
                                        <td>Tomate</td>
                                        <td>Edinburgh</td>
                                        <td>22</td>
                                        <td>2012/03/29</td>
                                        <td>$433,060</td>
                                    </tr>
                                    <tr>
                                        <td>Yuca</td>
                                        <td>Tokyo</td>
                                        <td>33</td>
                                        <td>2008/11/28</td>
                                        <td>$162,700</td>
                                    </tr>
                                    <tr>
                                        <td>Papa</td>
                                        <td>New York</td>
                                        <td>61</td>
                                        <td>2012/12/02</td>
                                        <td>$372,000</td>
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