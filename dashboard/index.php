<?php require_once "vistas/parte_superior.php"?>

<!--INICIO del cont principal-->
<div class="container">
  <h1 class="text-center">Página Pricipal</h1>
</div>

<link href="../assets/dist/css/bootstrap.rtl.min.css" rel="stylesheet">

<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }

  .container {
    max-width: 960px;
  }

  /*
 * Custom translucent site header
 */

  .site-header {
    background-color: rgba(0, 0, 0, .85);
    -webkit-backdrop-filter: saturate(180%) blur(20px);
    backdrop-filter: saturate(180%) blur(20px);
  }

  .site-header a {
    color: #8e8e8e;
    transition: color .15s ease-in-out;
  }

  .site-header a:hover {
    color: #fff;
    text-decoration: none;
  }

  /*
 * Dummy devices (replace them with your own or something else entirely!)
 */

  .product-device {
    position: absolute;
    right: 10%;
    bottom: -30%;
    width: 300px;
    height: 540px;
    background-color: #333;
    border-radius: 21px;
    transform: rotate(30deg);
  }

  .product-device::before {
    position: absolute;
    top: 10%;
    right: 10px;
    bottom: 10%;
    left: 10px;
    content: "";
    background-color: rgba(255, 255, 255, .1);
    border-radius: 5px;
  }

  .product-device-2 {
    top: -25%;
    right: auto;
    bottom: 0;
    left: 5%;
    background-color: #e5e5e5;
  }


  /*
 * Extra utilities
 */

  .flex-equal>* {
    flex: 1;
  }

  @media (min-width: 768px) {
    .flex-md-equal>* {
      flex: 1;
    }
  }
</style>


<!-- Custom styles for this template -->
<link href="https://fonts.googleapis.com/css?family=Amiri:wght@400;700&amp;display=swap" rel="stylesheet">
<!-- Custom styles for this template -->

</head>

<body>

  <!--FIN del cont principal-->
  <main>
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
      <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Pagina principal</h1>
        <p class="lead fw-normal">La pagina principal da a conocer los procesos para la administracion de estudiantes.</p>
        <a class="btn btn-outline-secondary" href="dashboard.php">Ir a modifcar</a>
      </div>
   
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-dark me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Agregar</h2>
          <p class="lead">En el que se agregara nuevos estudiantes.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Modificar</h2>
          <p class="lead">Modificando datos que se encuentran dentro de la base de datos.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
      <div class="bg-light me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center overflow-hidden">
        <div class="my-3 p-3">
          <h2 class="display-5">Eliminar</h2>
          <p class="lead">Eliminara todos los datos que existan del estudiante.</p>
        </div>
        <div class="bg-dark shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
      <div class="bg-primary me-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3 py-3">
          <h2 class="display-5">Buscar</h2>
          <p class="lead">Buscara todas las relaciones con lo escrito.</p>
        </div>
        <div class="bg-light shadow-sm mx-auto" style="width: 80%; height: 300px; border-radius: 21px 21px 0 0;"></div>
      </div>
    </div>



<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>