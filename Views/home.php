<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="Assets/css/style1.css">
    <link rel="stylesheet" href="Assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script src="https://kit.fontawesome.com/1a8f7850c7.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic " data-tilt>
					<img src="Assets/img/nonita2.png" alt="IMG">
				</div>

                <form class="login100-form validate-form" action="<?php echo base_url(); ?>Usuarios/login" method="post" autocomplete="off">
                    <span class="login100-form-title" src="<?php echo base_url(); ?>">
						<img src="Assets/img/logop.png" >
                        <br>
                    </span>
                            <div class="wrap-input100 validate-input">
                            <input id="usuario" class="input100" type="text" name="usuario" placeholder="Usuario" required>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa-solid fa-user"></i>
						    </span>
                            </div>

                            <div class="wrap-input100 validate-input">
                                <input id="usuario" class="input100" type="password" name="clave" placeholder="Contraseña" required> 
                                <span class="focus-input100"></span>
                            <span class="symbol-input100">
							<i class="fa-solid fa-lock"></i>
						    </span>

                            
                            <div class="col-lg-6">
                            <?php if (isset($_GET['msg'])) {
                                $alert = $_GET['msg'];
                                if ($alert == "existe") { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <strong>Datos incorrectos</strong>
                                    </div>
                                <?php } else if ($alert == "password") { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Contraseña incorrecta</strong>
                                    </div><br><br>
                                <?php } else { ?>
                                    <div class="alert alert-danger" role="alert">
                                        <strong>Los datos no coinciden</strong>
                                    </div>
                            <?php }
                            } ?>
                        </div>


                            </div>
                            
                            <div class="container-login100-form-btn">
						    <button class="login100-form-btn"> Iniciar</button>
					
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <script src="Assets/js/jquery-3.2.1.min.js"></script>
	<script src="Assets/js/tilt.jquery.min.js"></script>
</body>

</html>
