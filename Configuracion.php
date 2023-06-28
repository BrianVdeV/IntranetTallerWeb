<html>

<head>
    <title>Mi Intranet</title>
    <meta charset="UTF-8" />
    <!--
  <link rel="stylesheet" href="styles.css" />
  <link rel="stylesheet" href="cuerpo.css" />
  <link href="css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  -->
    <link rel="shortcut icon" href="img/logo.png">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/estilos.css">
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Configuracion.css">
</head>

<body>

    <body class="sb-nav-fixed">
        <?php include_once('inc/nav.php'); ?>
        <div id="layoutSidenav">
            <?php include_once('inc/sidenav.php'); ?>
            <div id="layoutSidenav_content">

                <main>
                    <script src="js/Javaconfiguracion.js"></script>
                    <form>
                        <h1>Configuracion</h1>
                        <fieldset>
                            <legend>Moneda</legend>
                            <input type="radio" id="currency-usd" name="currency" value="usd" onclick="updatePage()" />
                            <label for="currency-usd">USD</label>
                            <input type="radio" id="currency-eur" name="currency" value="eur" onclick="updatePage()" />
                            <label for="currency-eur">EUR</label>
                            <input type="radio" id="currency-jpy" name="currency" value="jpy" onclick="updatePage()" />
                            <label for="currency-jpy">JPY</label>
                            <input type="radio" id="currency-gbp" name="currency" value="gbp" onclick="updatePage()" />
                            <label for="currency-gbp">GBP</label>
                        </fieldset>
                        <fieldset>
                            <legend>Notificaciones</legend>
                            <input type="checkbox" id="notifications" onclick="updatePage()" />
                            <label for="notifications">Recibir notificaciones</label>
                        </fieldset>
                        <fieldset>
                            <legend>Tema y Diseño</legend>

                            <form>
                                <input type="radio" onclick="cambiarFondo('purple')" name="opcion" value="opcion1">
                                <label for="opcion1">Morado</label><br>
                                <input type="radio" onclick="cambiarFondo('white')" name="opcion" value="opcion2">
                                <label for="opcion2">Blanco</label><br>
                                <input type="radio" onclick="cambiarFondo('green')" name="opcion" value="opcion3">
                                <label for="opcion3">Verde</label><br>
                                <input type="radio" onclick="cambiarFondo('orange')" name="opcion" value="opcion3">
                                <label for="opcion3">Naranja</label><br>
                                <input type="radio" onclick="cambiarFondo('violet')" name="opcion" value="opcion3">
                                <label for="opcion3">violeta</label><br>
                                <input type="radio" onclick="cambiarFondo('darkgoldenrod')" name="opcion" value="opcion3">
                                <label for="opcion3">Oro</label><br>
                            </form>


                        </fieldset>
                    </form>
                    <script src="script.js"></script>
                </main>

                <?php include_once('inc/footer.php'); ?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>


</body>

</html>