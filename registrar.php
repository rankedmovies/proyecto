<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Bootstrap 4 Login/Register Form</title>
</head>


<body>
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <body class="bg-default">
      <div class="main-content">

        <div class="header bg-primary py-7 py-lg-8">
          <div class="container">
            <div class="header-body text-center mb-7">
              <div class="row justify-content-center">
                <div class="col-lg-5 col-md-6">
                  <h1 class="text-white">Bienvenido</h1>
                  <p class="text-lead text-light">Disfruta de todas tus peliculas, en una misma plataforma Web, puedes ingresar desde donde quieras. </p>
                </div>
              </div>
            </div>
          </div>
          <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
              <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
          </div>
        </div>
        <!-- Page content -->
        <div class="container mt--8 pb-5">
          

            <!-- Table -->
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
              <div class="card bg-secondary shadow border-0">

                <div class="card-body px-lg-5 py-lg-5">
                  <div class="text-center text-muted mb-4">
                    <div id="imagen">
                        <img src="img/logoo.png" width="35%" height="35%">
                      </div>
                    <small>Registrarse</small>
                  </div>


                  <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="form">
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                        </div>
                        <input class="form-control" placeholder="Username" type="text" name="usuario">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                        </div>
                        <input class="form-control" placeholder="Email" type="email" name="correo">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group input-group-alternative">
                        <div class="input-group-prepend">
                          <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                        </div>
                        <input class="form-control" placeholder="Contraseña" type="password" name="clave">
                      </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group input-group-alternative">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                          </div>
                          <input class="form-control" placeholder="Confirme Contraseña" type="password" name="clave2">
                        </div>
                      </div>

                      <?php if(!empty($error)): ?>
                        <div class="mensaje">
                          <?php echo $error; ?>
                          </div>
                          <?php endif; ?>

                      <div class="row">
                        <div class="col-lg-6">
                            <div class="text-center">
                            <a href="login.php">    
                              <button type="button" class="btn btn-primary mt-4 btn-block">Iniciar Seccion</button>
                              </a>
                              </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="text-center">
                                  <a href="register.php"fff>
                                    <button type="submit" class="btn btn-primary mt-4 btn-block">Registrarse</button>
                                </a>
                                
                              </div>
                        </div>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>




      <!-- Footer -->
      <footer class="py-5">
        <div class="container">
          <div class="row align-items-center justify-content-xl-between">
            <div class="col-xl-6">
              <div class="copyright text-center text-xl-left text-muted">
                © 2020 <a href="index.php" class="font-weight-bold ml-1" target="_blank">Ranked Movies</a>
              </div>
            </div>
            <div class="col-xl-6">
              <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                <li class="nav-item">
                  <a href="#" class="nav-link" target="_blank">Home</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link" target="_blank">About Us</a>
                </li>
                
              </ul>
            </div>
          </div>
        </div>
      </footer>
    
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="/script.js"></script>

        <script src="js/jquery.js"></script>
      <script src="js/script.js"></script>

    </body>
</html>