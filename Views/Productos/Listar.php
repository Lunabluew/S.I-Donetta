<!DOCTYPE html>
<html lang="es">
<head>
<?php encabezado() ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Assets/css/estilosp.css">
    <link rel="stylesheet" href="../Assets/css/estilosp2.css">
    <title>Productos</title>
</head>
<body>
<div class="page-content sec2">
    <section  class="sec">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 mt-2">
                    <div class="row">
                        <div class="col-lg-6 mb-2">
                            <button class="btn btn-dark" type="button" data-toggle="modal" data-target="#nuevo_producto"><i class="fas fa-plus-circle"></i> Nuevo</button>
                            <a class="btn btn-danger" href="<?php echo base_url(); ?>Productos/eliminados"><i class="fas fa-user-slash"></i> Inactivos</a>
                        </div>
                        <div class="col-lg-6">
                            <?php if (isset($_GET['msg'])) {
                                $alert = $_GET['msg'];
                                if ($alert == "existe") { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>El producto ya existe</strong>
                                    </div>
                                <?php } else if ($alert == "error") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Producto registrado</strong>
                                    </div>
                                <?php } else if ($alert == "registrado") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Producto registrado</strong>
                                    </div>
                                <?php } else if ($alert == "modificado") { ?>
                                    <div class="alert alert-success" role="alert">
                                        <strong>Producto Modificado</strong>
                                    </div>
                            <?php }
                            } ?>
                        </div>
                    </div>
                    <!-- <div class="table-responsive">
                        <table class="table table-hover table-bordered" id="Table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>Id</th>
                                    <th>Código</th>
                                    <th>Nombre</th>
                                    <th>Stock</th>
                                    <th>Precio</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead> -->
                            <div class="tablesp">
                            <tbody>
                                <?php foreach ($data as $cl) { ?>
                                    <tr>
                                    <div id="orden">
                                        <div class="id">
                                    <td><b>Id = </b> <?php echo $cl['id']; ?></td>
                                        </div>
                                        <div class="codigo">
                                    <td><b>Codigo =</b> <?php echo $cl['codigo']; ?></td>
                                        </div>
                                        <div class="nombre">
                                    <td><b>Nombre = </b><?php echo $cl['nombre']; ?></td>
                                        </div>
                                        <div class="cantidad">
                                    <td><b>Cantidad = </b><?php echo $cl['cantidad']; ?></td>
                                        </div>
                                        <div class="precio">
                                    <td><b>Precio = </b><?php echo $cl['precio']; ?></td>
                                        </div>
                                        <div class="botones">
                                    <td>
                                        <a href="<?php echo base_url() ?>Productos/editar?id=<?php echo $cl['id']; ?>" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                        <form action="<?php echo base_url() ?>Productos/eliminar?id=<?php echo $cl['id']; ?>" method="post" class="d-inline elim">
                                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </div>
                                </div>
                            </tr><br>
                            <?php } ?>
                            </tbody>
                            </div>
                        <!-- </table>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
</div>
<div id="nuevo_producto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-white" id="my-modal-title"><i class="fas fa-clipboard-list"></i> Nuevo Producto</h5>
                <button class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
            <form method="post" action="<?php echo base_url(); ?>Productos/insertar" autocomplete="off">
                <div class="modal-body">
                    <div class="form-group">
                        <label for="number">Código</label>
                        <input type="number" id="number" class="form-control" type="text" name="codigo" placeholder="Código" required>
                    </div>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input id="nombre" class="form-control" type="text" name="nombre" placeholder="Descripción" required>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="number">Precio</label>
                                <input type="number" id="number" class="form-control" type="text" name="precio" placeholder="Precio" required>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <button class="btn btn-primary" type="submit"><i class="fas fa-save"></i> Registrar</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fas fa-window-close" required></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php pie() ?>  
</body>
</html>
  