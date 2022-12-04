<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sistema de ventas</title>
    <link rel="shortcut icon" href="../Assets/img/ventS.png">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/style.default.css" id="theme-stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/custom.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/dataTables.bootstrap4.min.css">
    <script src="https://kit.fontawesome.com/1a8f7850c7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Assets/css/estilosp3.css">
    <link rel="stylesheet" href="../Assets/css/admin.css">
    <link rel="stylesheet" href="../Assets/css/admin1.css">

</head>

<body>
    <header class="header">
        <nav class="navbar bg-dark" id="principal">
            <div class="container-fluid d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <input type="hidden" id="url" value="<?php echo base_url(); ?>">
                    <a href="<?php echo base_url(); ?>Admin/Listar" class="navbar-brand">
                    </a>
                    <button class="sidebar-toggle"><i class="fas fa-arrow-alt-circle-left"></i></button>
                </div>
                <div>
                    <h4 id="titulo">Sistema de control y registro de ventas</h4>
                    <div id="Lp">
                    <img id="lp" src="../Assets/img/logoD.png"></img>
                    </div>
                </div>
                <div class="list-inline-item logout">
                    <button class="btnsalir" type="button" data-toggle="modal" data-target="#logout">Salir</button>
                </div>
            </div>
            </div>
        </nav>
    </header>
    <div class="d-flex align-items-stretch">
        <nav id="sidebar" class="bg-dark">
            <div class="sidebar-header d-flex align-items-center p-1" id="color">
                <div class="avatar" data-toggle="modal" data-target="#cambiarPass"><img src="<?php echo base_url(); ?>/Assets/img/administrador.jpg" alt="..." class="img-fluid rounded-circle"></div>
                <div class="title">
                    <h5 class="h5" id="titulo"><?php echo $_SESSION['rol']; ?></h5>
                </div>
            </div>
            <ul class="list-unstyled">
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="fa-solid fa-cart-shopping" id="icon"></i><strong class="text-white">Ventas</strong></a>
                    <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                        <li><a href="<?php echo base_url(); ?>Ventas/Listar"><i class="fa-solid fa-cart-plus" id="icon"></i>Nueva Venta</a></li>
                        <li><a href="<?php echo base_url(); ?>Ventas/lista"><i class="fa-solid fa-folder-open" id="icon"></i>Ventas</a></li>
                    </ul>
                </li>
                <li><a href="<?php echo base_url(); ?>Productos/Listar"><i class="fa-solid fa-utensils" id="icon"></i><strong class="text-white"> Productos </strong></a></li>
                <li><a href="<?php echo base_url(); ?>Clientes/Listar"><i class="fa-solid fa-circle-user" id="icon"></i><strong class="text-white"> Clientes </strong></a></li>
                <?php if($_SESSION['rol'] == "Administrador"){ ?>
				<li><a href="<?php echo base_url(); ?>Usuarios/Listar"><i class="fa-solid fa-user-tie" id="icon"></i><strong class="text-white"> Usuarios </strong></a></li>
 
				<li><a href="<?php echo base_url(); ?>Configuracion/Listar"><i class="fa-solid fa-list-check" id="icon"></i><strong class="text-white"> Configuración </strong></a></li>
                <?php } ?>
        </nav>