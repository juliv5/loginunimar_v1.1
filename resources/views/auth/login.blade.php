<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

    <link rel="stylesheet" href="{{asset('assets/estilos.css')}}">
</head>

<body>
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4">

                                    <div class="text-center">
                                        <img src="{{asset('assets/logoU.png')}}" style="width: 300px;" alt="logo">
                                        <br> </br>
                                        <h4 class="mt-1 mb-5 pb-1">Método de calificación Ingeniería de Sistemas Unimar.</h4>
                                    </div>

                                    <form action="{{route('login')}}" method="post">
                                        @csrf
                                        <center><b>INICIO DE SESIÓN</b></center>
                                        <br> </br>

                                        <div class="form-outline mb-4">
                                            <input type="email" name="email" id="form2Example11" class="form-control" placeholder="Dirección de correo electronico" />
                                            <label class="form-label" for="ejemplo@umariana.edu.co">Correo Electronico</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="password" name="password" id="form2Example22" class="form-control" placeholder="****" />
                                            <label class="form-label" for="form2Example22">Contraseña</label>
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <a href="{{route('home')}}" class="btn btn-outline-danger">Iniciar Sesión</a> <br> </br>
                                            <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                                        </div>

                                        <div class="d-flex align-items-center justify-content-center pb-4">

                                            <p class="mb-0 me-2">No tienes una cuenta?</p>
                                            <br> </br>
                                            <a href="{{route('register')}}" class="btn btn-outline-danger">Crear cuenta</a>

                                        </div>

                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                <div class="text-white px-3 py-4 p-md-5 mx-md-4">

                                    <br> </br><br> </br>
                                    <h3 class="mb-7">Presentación del programa</h3>
                                    <br> </br>

                                    <p class="small mb-0">El Programa de Ingeniería de Sistemas de la Universidad Mariana procura la formación
                                        integral del Ingeniero de Sistemas tanto en sus aspectos humanísticos como científicos que lo posibilita
                                        a participar de manera activa y competente en la construcción de soluciones
                                        informáticas encaminadas a satisfacer necesidades tecnológicas computacionales y
                                        organizacionales del entorno local, regional, nacional e internacional, siempre actuante bajo los
                                        principios y valores cristianos.</p>

                                    <br> </br> <br> </br>
                                    <img src="{{asset('assets/ingsis.jpg')}}" style="width: 300px;" alt="logo">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>