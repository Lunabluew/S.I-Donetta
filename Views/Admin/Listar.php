<!DOCTYPE html>
<html lang="en">
<head>
<?php encabezado() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/admin.css">
    <link rel="stylesheet" href="../Assets/css/admin1.css">
    <title>Panel de administración</title>
</head>
<body>
<div class="page-content pagea">
    <div class="page-header pagea ">
        <div class="container-fluid">
            <center><h2 class="h5A">Panel de Administración</h2></center>
        </div>
    </div>
    <section class="no-padding-bottom">
        <div class="container-fluid">
            <div class="row">

                <div class="col-xl-3 col-md-6 mb-4">
                    <div id="cardA" class="card border-0 shadow h-100 py-2">
                        <div class="card-body" id="cardA">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Usuarios</div>
                                    <div class="h5 mb-0 font-weight-bold text-black"><?php echo $alert; ?></div>
                                </div>
                                <div class="conten1">
                                <img id="cliente" src="../Assets/img/usuarios.png"></img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div  id="cardB" class="card border-0 shadow h-100 py-2">
                        <div class="card-body" id="cardB">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Productos</div>
                                    <div class="h5 mb-0 font-weight-bold text-black"><?php echo $data; ?></div>
                                </div>
                                <div class="conten">
                                <img id="rosquilla" src="../Assets/img/rosquilla.png"></img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                <div  id="cardC" class="card border-0 shadow h-100 py-2">
                        <div class="card-body"  id="cardC">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Clientes</div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-black"><?php echo $cliente; ?></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="conten1">
                                <img id="cliente" src="../Assets/img/objetivo.png"></img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                <div  id="cardD" class="card border-0 shadow h-100 py-2">
                        <div class="card-body"  id="cardD">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">Ventas</div>
                                    <div class="h5 mb-0 font-weight-bold text-black"><?php echo $config; ?></div>
                                </div>
                                <div class="conten1">
                                <img id="cliente" src="../Assets/img/compras.png"></img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h4 class="h5R">Reporte Gráfico</h4>
                <div class="col-lg-6">
                    <div class="card mb-4">
                        <div class="card-header">
                        <img class="grafica" src="../Assets/img/grafico.png"></img>
                            Productos Más vendidos
                        </div>
                        <div class="card-body bg-white"><canvas id="myPieChart" width="100%" height="50"></canvas></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                    <div class="card mb-4" id="cardVen" >
                        <div class="card-header">
                        <img class="grafica" src="../Assets/img/instruccion.png"></img>
                            Instrucciones
                        </div>
                        <div><h4 id="hv">Si te logueas como vendedor:</h4>
                        <p id="hv">Si eres vendor, debes saber que cuentas unicamente con las funciones de gestión de clientes, usuarios y ventas. De ser el caso que el administrador te de permisos como otro administrador, podras acceder a las dos funciones restantes del sistema.</p>
                        <img class="vendedora" src="../Assets/img/vendedora.png"></img>
                        <img class="vendedor" src="../Assets/img/vendedor.png"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>

    <script>
        window.addEventListener("load", function() {
            reportes();
            reportesTorta();
        })
    </script>
</div>
<?php pie() ?>
</body>
</html>



