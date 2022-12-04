<!DOCTYPE html>
<html lang="es">
<head>
<?php encabezado() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/estilos3.css">
    <title>Realizar Venta</title>
</head>
<body>
<div class="page-content" id="conten4">
    <div class="page-header" id="conten5">
        <div class="container-fluid">
        <center><h2 class="h5 no-margin-bottom" id="h2rv">Nueva Venta</h2></center>
        </div>
    </div>
    <section>
        <div class="container-fluid">
            <form action="" method="post" id="frmCompras" class="row" autocomplete="off">
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="buscar_codigo">Cógigo de barras</label>
                        <input type="hidden" id="id" name="id">
                        <input id="buscar_codigo" onkeyup="BuscarCodigo(event);" class="form-control" type="text" name="codigo" placeholder="Código de barras">
                        <span class="text-danger d-none" id="error">No hay producto</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label for="nombre">Producto</label>
                        <input id="nombre" class="form-control" type="hidden" name="nombre">
                        <br />
                        <strong id="nombreP"></strong>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="form-group">
                        <label for="cantidad">Cantidad</label>
                        <input id="stockD" type="hidden">
                        <input id="cantidad" class="form-control" type="text" name="cantidad" onkeyup="IngresarCantidad(event);">
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="form-group">
                        <label for="precio">Precio</label>
                        <input id="precio" class="form-control" type="hidden" name="precio">
                        <br />
                        <strong id="precioP"></strong>
                    </div>
                </div>
            </form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive">
                        <table class="table table-light mt-4" id="tablaCompras">
                            <thead class="thead-dark">
                                <tr id="tr2">
                                    <th id="t2">Id</th>
                                    <th id="t2">Producto</th>
                                    <th id="t2">Cantidad</th>
                                    <th id="t2">Precio</th>
                                    <th id="t2">Total</th>
                                    <th id="t2">Accion</th>
                                </tr>
                            </thead>
                            <tbody id="ListaCompras">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mt-1">
                    <div class="Dclientes">
                        <strong class="text-black">Datos del Cliente</strong>
                        <input type="hidden" id="id_cliente" name="id_cliente">
                        <input type="text" id="ruc_cliente" onkeyup="BuscarCliente(event);" name="ruc_cliente" class="form-control" placeholder="Cedula del cliente"><br>
                        <strong id="nom_cli" class="Dclientes  border-0"></strong><br>
                        <strong id="dir_cli" class="Dclientes  border-0"></strong><br>
                        <strong id="tel_cli" class="Dclientes  border-0"></strong>
                    </div>
                </div>
                <div class="col-lg-4 mt-1">
                    <div class="form-group">
                        <strong class="text-black">Total a pagar</strong>
                        <input type="hidden" id="total" name="total" class="form-control  mb-2">
                        <strong id="tVenta" class="form-control border-0 text-success"></strong>
                        <br>
                        <br>
                        <br>
                        <button class="btn btn-danger" type="button" id="AnularCompra">Anular Venta</button>
                        <button class="btn btn-success" type="button" id="procesarVenta"><i class="fas fa-money-check-alt"></i> Procesar Venta</button>
                        <div>
                        <img id="donut" src="../Assets/img/realizventa.gif"></img>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php pie() ?>  
</body>
</html>
