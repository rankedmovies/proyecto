<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>RankedMovies</title>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="css/main.css">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" rel="stylesheet" type="text/css">
       
        <script async defer src="https://buttons.github.io/buttons.js"></script>
      
    </head>
    <body>
      <!-- navbar starts -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#"> <h3 class="mb-0"><i class="fas fa-fire-alt"></i></h3></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link p-2 font-weight-bold text-white" href="prin2.php">RankedMovies </a>
          </li>

          
        </ul>
      
       <a class="nav-link text-white p-2 font-weight-bold" href="login.php">Login</a> 
        <a class="nav-link text-white p-2 font-weight-bold" href="register.php">Register</a>
    
      </div>
      </div>
    </nav>
<!-- nav bar ends -->
    
  <div class="jumbotron jumbotron-odi-hero bg-primary">
  <div class="jumbotron-overlay ">
      <div class="container jumbotron-padding  text-center">
      <h1 class="display-4">Disfruta de todas las peliculas desde una misma pagina</h1>
         <p>
            <a href="register.php" class="btn btn-lg btn-success btn-circle my-4 mr-3">Registrase Aqui</a>
         </p>
      </div>
    </div>
</div>


         <div class="container mt-5" id="about">
                   <h1 class="text-center py-4">Disfrutas sin limites</h1>
                  
                  <div class="row text-center mt-5">
                   <div class="col-md-3">
                    <div class="card shadow">
                      <div class="card-body">
                      <div class="py-3 text-center"> <i class="fas fa-rocket card-img-top fa-4x text-primary" aria-hidden="true"></i></div>
                      <div class="card-body">
                        <h4 class="card-title">Multiplataforma</h4>
                        <p class="card-text">Nuestra aplicacion web permite acceder desde cualquier plataforma</p>
                       </div>
                      </div>
                    </div>
                    </div>
                      <div class="col-md-3">
                     <div class="card shadow">
                      <div class="card-body">
                       <div class="py-3 text-center"><i class="fas fa-feather card-img-top fa-4x text-primary" aria-hidden="true"></i></div>
                      <div class="card-body">
                        <h4 class="card-title">Eficaz</h4>
                        <p class="card-text">Nuestra aplicacion web es facil y eficaz a la hora de utilizarla. </p>
                       </div>
                      </div>
                    </div>
                    </div>
                      <div class="col-md-3">
                     <div class="card shadow">
                      <div class="card-body">
                      <div class="py-3 text-center"><i class="fa fa-tablet card-img-top fa-4x text-primary" aria-hidden="true"></i></div>
                     
                      <div class="card-body">
                        <h4 class="card-title">Variedad </h4>
                        <p class="card-text"> Nuestra aplicacion web contiene una gran variedad de peliculas </p>
                        </div>
                      </div>
                    </div>
                    </div>
                  
                             
                    <div class="col-md-3">
                     <div class="card shadow">
                      <div class="card-body">
                      <div class="py-3 text-center"><i class="fas fa-charging-station card-img-top fa-4x text-primary" aria-hidden="true"></i>
                     </div>
                      <div class="card-body">
                        <h4 class="card-title">Registro seguro</h4>
                        <p class="card-text">Nuestro formulario de registro es seguro y facil de llenar.</p>
                        </div>
                      </div>

                    </div>
                    </div>
                   
                  </div>
                </div>
              <div class="container mt-4  text-center">
                 <p class="pt-5 pb-2 h4 text-monospace">Con la tecnologia Gracias a:</p>
                 <br><br>
                <div class="row container">
                 <div class="col-md-4">
                  <div id="imagen">
                    <img src="img/base.svg" width="100%" height="100%">
                  </div>
                 </div>
                 <div class="col-md-8">
                  <div class="mx-auto" >
                    <p class="text-justify">  The MovieDB es una API gratis que propocionas una gran base de datos con todas las pelicuals del momentos. Utilizando tambien la misma base de datos de IMDb para tener mas datos precisos, tiene un sistemas donde los mismos desarrolladores pueden actualziar de forma manuel la base de datos de peliculas.</p>
                  </div>
                </div>

                  </div>

                </div>
              </div>
              <br><br>

              <!-- Acordion -->
        <section class="container text-center p-5 text-dark " id="preguntas" >
          <div class="row">
              <div class="accordion" id="accordionExample">
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn color-letra btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                          ¿Quiénes somos?
                        </button>
                      </h2>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        Este proyecto esta en desarrollo por Samuel Langumás y Carlos Diaz, ambos estudiantes universitarios.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn color-letra btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          ¿Qué lenguaje utilizaremos?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        Hasta ahora utilizaremos Javascript, html y css con algunas APIS encontradas en la internet.
                      </div>
                    </div>
                  </div>
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn color-letra btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          ¿Que nos llevó a cabo a desarrollar este proyecto?
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        En nuestro tiempo libre nos encanta ver películas, pero a la hora de buscarla se nos vuelve difícil encontrar una película muy buena, a veces solemos elegir una película que no es de nuestro agrado o que nos parece algo aburridas, es por eso que nos llegó esta idea.
                      </div>
                    </div>
                  </div>
                </div>           
              </div>
      </section>
            

<!-- blog post end -->
<!-- footer start -->
    <footer class="bg-dark text-light py-5 mt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>RankedMovies</h3>
                            <small class="d-block text-muted">© 2020-2021</small>
                            <small class="text-muted">All Rights Reserved.</small>
                        </div>


                  
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </footer>
<!-- footer end -->
   
    </body>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


</html>
