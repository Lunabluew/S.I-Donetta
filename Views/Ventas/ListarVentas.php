<!DOCTYPE html>
<html lang="es">
<head>
    <?php encabezado() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/estilos.css">
    <link rel="stylesheet" href="../Assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="../Assets/css/bootstrap.min.css">
    <title>Ventas</title>
</head>
<body>
<div class="page-content" id="conten1">
    <div class="page-header" id="conten2">
        <div class="container-fluid">
            <center><h2 class="h5 no-margin-bottom" id="h21">Ventas Generadas</h2></center>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="Table">
                            <thead class="thead-" id="th1">
                                <tr id="tr1">
                                    <th id="txt">Id</th>
                                    <th id="txt">Cliente</th>
                                    <th id="txt">Total</th>
                                    <th id="txt">Fecha</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $lista) { ?>
                                    <tr>
                                        <td><?php echo $lista['id']; ?></td>
                                        <td><?php echo $lista['id_cliente']; ?></td>
                                        <td><?php echo $lista['total']; ?></td>
                                        <td><?php echo $lista['fecha']; ?></td>
                            
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php pie() ?>
</body>
</html>