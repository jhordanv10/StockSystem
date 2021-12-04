<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modulo compras | Compras</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- Favicons -->
    <link href="" rel="icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
    <script src="https://kit.fontawesome.com/7f19db1c03.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <!-- Main Stylesheet File -->
    <link href="/css/style_app.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/input_on.css">
</head>
<body>

    <header id="header">
        <div class="container">
            <div class="content">
                <div class="row-">
                    <div class="display d-flex">
                        <div class="logo-empresa wow animated bounceInLeft box1" data-wow-delay="0.2s">
                            <img src="img/LOGO.png" alt="">
                        </div>
                        <div class="saludo wow animated bounceInLeft box2" data-wow-delay="0.4s">
                            <h2>¡Hola<br><span class="user-name" id="user-name">#username</span>!</h2>
                        </div>
                        <div id="dropbtn" class="date-user dropbtn wow animated bounceInLeft box3" data-wow-delay="0.6s">
                            <div class="content-user d-flex">
                                <div class="name">
                                    <span class="primernombre" id="primernombre">#primernombre</span> <span class="primerapellido" id="primerapellido">#primerapellido</span>
                                </div>
                                <div class="user-photo">
                                    <div class="img-user">
                                        <img src="img/user.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div id="dropdown-content" class="user-option dropdown-content wow fadeInUp">
                                <ul>
                                  <li><a href="perfil.html">Perfil</a></li>
                                  <li><a href="cambiar_contrasena.html">Cambiar contraseña</a></li>
                                  <li><a href="login.html">Cerrar sesión</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="content-section" class="modulo-compras">
        <div class="container">
            <div class="content">
                <div class="row">
                    
                    <div class="icono-section col-3 header-section wow fadeInUp">
                        <div class="botones-accion">
                            <div class="boton agregar-pro">
                                <a href="/agregarproducto.html" class="btn btn-primary">Agregar nuevo producto</a>
                            </div>
                            <div class="boton modificar-pro">
                                <a href="/agregarproducto.html" class="btn btn-primary">Modificar producto</a>
                            </div>
                            <div class="boton info-pro">
                                <a href="" class="btn btn-primary">Información del producto</a>
                            </div>
                            <div class="boton eliminar-pro">
                                <a href="/agregarproducto.html" class="btn btn-primary">Eliminar producto</a>
                            </div>
                        </div>
                    </div>

                    <div class="table-content col-9 wow fadeInUp">
                        <div class="pestañas-tables d-flex">
                            <div class="boton-tabla-left solicitud-product">
                                <a href="" id="solicitud-product" class="btn btn-primary">Solicitud de productos</a>
                            </div>
                            <div class="boton-tabla-rigth lista-product">
                                <a href="" id="lista-product" class="btn btn-primary">Lista de productos</a>
                            </div>
                        </div>

                        <div class="table solicitud-product-table" id="solicitud-product-table">
                            <div class="options">
                                <div class="botones d-flex float-left">
                                    <div class="boton boton-inicial btn-aprob">
                                        <a href="" class="btn btn-secondary">Aprobado</a>
                                    </div>
                                    <div class="boton boton-medio btn-rechazado">
                                        <a href="" class="btn btn-secondary">Rechazado</a>
                                    </div>
                                    <div class="boton boton-medio btn-soli">
                                        <a href="" class="btn btn-secondary">Solicitado</a>
                                    </div>
                                    <div class="boton boton-medio btn-disp">
                                        <a href="" class="btn btn-secondary">Disponible</a>
                                    </div>
                                    <div class="boton boton-final btn-retrazo">
                                        <a href="" class="btn btn-secondary">Con retrazo</a>
                                    </div>
                                </div>
                                <div class="search float-right">
                                    <div class="search-group">
                                        <div class="text">
                                            <input type="text" name="" id="" placeholder="Buscar solicitud">
                                        </div>
                                        <div class="icono-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scroll-container">
                                <div class="table-scroll">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Seleccionar</th>
                                        <th colspan="2">Head 1 + 2</th>
                                        <th>Head 3</th>
                                        <th>Head 4</th>
                                        <th>Head 5</th>
                                        <th colspan="2">Head 6 + 7</th>
                                        <th>Head 8</th>
                                        <th>Head 9</th>
                                      </tr>
                                    </thead>
                          
                                    <tbody>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item1"></td>
                                        <td><label for="item1">Cell 1</label></td>
                                        <td><label for="item1">Cell 2</label></td>
                                        <td><label for="item1">Cell 3</label></td>
                                        <td><label for="item1">Cell 4</label></td>
                                        <td><label for="item1">Cell 5</label></td>
                                        <td><label for="item1">Cell 6</label></td>
                                        <td><label for="item1">Cell 7</label></td>
                                        <td><label for="item1">Cell 8</label></td>
                                        <td><label for="item1">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item2"></td>
                                        <td><label for="item2">Cell 1</label></td>
                                        <td><label for="item2">Cell 2</label></td>
                                        <td><label for="item2">Cell 3</label></td>
                                        <td><label for="item2">Cell 4</label></td>
                                        <td><label for="item2">Cell 5</label></td>
                                        <td><label for="item2">Cell 6</label></td>
                                        <td><label for="item2">Cell 7</label></td>
                                        <td><label for="item2">Cell 8</label></td>
                                        <td><label for="item2">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item3"></td>
                                        <td><label for="item3">Cell 1</label></td>
                                        <td><label for="item3">Cell 2</label></td>
                                        <td><label for="item3">Cell 3</label></td>
                                        <td><label for="item3">Cell 4</label></td>
                                        <td><label for="item3">Cell 5</label></td>
                                        <td><label for="item3">Cell 6</label></td>
                                        <td><label for="item3">Cell 7</label></td>
                                        <td><label for="item3">Cell 8</label></td>
                                        <td><label for="item3">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item4"></td>
                                        <td><label for="item4">Cell 1</label></td>
                                        <td><label for="item4">Cell 2</label></td>
                                        <td><label for="item4">Cell 3</label></td>
                                        <td><label for="item4">Cell 4</label></td>
                                        <td><label for="item4">Cell 5</label></td>
                                        <td><label for="item4">Cell 6</label></td>
                                        <td><label for="item4">Cell 7</label></td>
                                        <td><label for="item4">Cell 8</label></td>
                                        <td><label for="item4">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item5"></td>
                                        <td><label for="item5">Cell 1</label></td>
                                        <td><label for="item5">Cell 2</label></td>
                                        <td><label for="item5">Cell 3</label></td>
                                        <td><label for="item5">Cell 4</label></td>
                                        <td><label for="item5">Cell 5</label></td>
                                        <td><label for="item5">Cell 6</label></td>
                                        <td><label for="item5">Cell 7</label></td>
                                        <td><label for="item5">Cell 8</label></td>
                                        <td><label for="item5">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item6"></td>
                                        <td><label for="item6">Cell 1</label></td>
                                        <td><label for="item6">Cell 2</label></td>
                                        <td><label for="item6">Cell 3</label></td>
                                        <td><label for="item6">Cell 4</label></td>
                                        <td><label for="item6">Cell 5</label></td>
                                        <td><label for="item6">Cell 6</label></td>
                                        <td><label for="item6">Cell 7</label></td>
                                        <td><label for="item6">Cell 8</label></td>
                                        <td><label for="item6">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item7"></td>
                                        <td><label for="item7">Cell 1</label></td>
                                        <td><label for="item7">Cell 2</label></td>
                                        <td><label for="item7">Cell 3</label></td>
                                        <td><label for="item7">Cell 4</label></td>
                                        <td><label for="item7">Cell 5</label></td>
                                        <td><label for="item7">Cell 6</label></td>
                                        <td><label for="item7">Cell 7</label></td>
                                        <td><label for="item7">Cell 8</label></td>
                                        <td><label for="item7">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item8"></td>
                                        <td><label for="item8">Cell 1</label></td>
                                        <td><label for="item8">Cell 2</label></td>
                                        <td><label for="item8">Cell 3</label></td>
                                        <td><label for="item8">Cell 4</label></td>
                                        <td><label for="item8">Cell 5</label></td>
                                        <td><label for="item8">Cell 6</label></td>
                                        <td><label for="item8">Cell 7</label></td>
                                        <td><label for="item8">Cell 8</label></td>
                                        <td><label for="item8">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item9"></td>
                                        <td><label for="item9">Cell 1</label></td>
                                        <td><label for="item9">Cell 2</label></td>
                                        <td><label for="item9">Cell 3</label></td>
                                        <td><label for="item9">Cell 4</label></td>
                                        <td><label for="item9">Cell 5</label></td>
                                        <td><label for="item9">Cell 6</label></td>
                                        <td><label for="item9">Cell 7</label></td>
                                        <td><label for="item9">Cell 8</label></td>
                                        <td><label for="item9">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item10"></td>
                                        <td><label for="item10">Cell 1</label></td>
                                        <td><label for="item10">Cell 2</label></td>
                                        <td><label for="item10">Cell 3</label></td>
                                        <td><label for="item10">Cell 4</label></td>
                                        <td><label for="item10">Cell 5</label></td>
                                        <td><label for="item10">Cell 6</label></td>
                                        <td><label for="item10">Cell 7</label></td>
                                        <td><label for="item10">Cell 8</label></td>
                                        <td><label for="item10">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item11"></td>
                                        <td><label for="item11">Cell 1</label></td>
                                        <td><label for="item11">Cell 2</label></td>
                                        <td><label for="item11">Cell 3</label></td>
                                        <td><label for="item11">Cell 4</label></td>
                                        <td><label for="item11">Cell 5</label></td>
                                        <td><label for="item11">Cell 6</label></td>
                                        <td><label for="item11">Cell 7</label></td>
                                        <td><label for="item11">Cell 8</label></td>
                                        <td><label for="item11">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item12"></td>
                                        <td><label for="item12">Cell 1</label></td>
                                        <td><label for="item12">Cell 2</label></td>
                                        <td><label for="item12">Cell 3</label></td>
                                        <td><label for="item12">Cell 4</label></td>
                                        <td><label for="item12">Cell 5</label></td>
                                        <td><label for="item12">Cell 6</label></td>
                                        <td><label for="item12">Cell 7</label></td>
                                        <td><label for="item12">Cell 8</label></td>
                                        <td><label for="item12">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item13"></td>
                                        <td><label for="item13">Cell 1</label></td>
                                        <td><label for="item13">Cell 2</label></td>
                                        <td><label for="item13">Cell 3</label></td>
                                        <td><label for="item13">Cell 4</label></td>
                                        <td><label for="item13">Cell 5</label></td>
                                        <td><label for="item13">Cell 6</label></td>
                                        <td><label for="item13">Cell 7</label></td>
                                        <td><label for="item13">Cell 8</label></td>
                                        <td><label for="item13">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item14"></td>
                                        <td><label for="item14">Cell 1</label></td>
                                        <td><label for="item14">Cell 2</label></td>
                                        <td><label for="item14">Cell 3</label></td>
                                        <td><label for="item14">Cell 4</label></td>
                                        <td><label for="item14">Cell 5</label></td>
                                        <td><label for="item14">Cell 6</label></td>
                                        <td><label for="item14">Cell 7</label></td>
                                        <td><label for="item14">Cell 8</label></td>
                                        <td><label for="item14">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item15"></td>
                                        <td><label for="item15">Cell 1</label></td>
                                        <td><label for="item15">Cell 2</label></td>
                                        <td><label for="item15">Cell 3</label></td>
                                        <td><label for="item15">Cell 4</label></td>
                                        <td><label for="item15">Cell 5</label></td>
                                        <td><label for="item15">Cell 6</label></td>
                                        <td><label for="item15">Cell 7</label></td>
                                        <td><label for="item15">Cell 8</label></td>
                                        <td><label for="item15">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item16"></td>
                                        <td><label for="item16">Cell 1</label></td>
                                        <td><label for="item16">Cell 2</label></td>
                                        <td><label for="item16">Cell 3</label></td>
                                        <td><label for="item16">Cell 4</label></td>
                                        <td><label for="item16">Cell 5</label></td>
                                        <td><label for="item16">Cell 6</label></td>
                                        <td><label for="item16">Cell 7</label></td>
                                        <td><label for="item16">Cell 8</label></td>
                                        <td><label for="item16">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item17"></td>
                                        <td><label for="item17">Cell 1</label></td>
                                        <td><label for="item17">Cell 2</label></td>
                                        <td><label for="item17">Cell 3</label></td>
                                        <td><label for="item17">Cell 4</label></td>
                                        <td><label for="item17">Cell 5</label></td>
                                        <td><label for="item17">Cell 6</label></td>
                                        <td><label for="item17">Cell 7</label></td>
                                        <td><label for="item17">Cell 8</label></td>
                                        <td><label for="item17">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item18"></td>
                                        <td><label for="item18">Cell 1</label></td>
                                        <td><label for="item18">Cell 2</label></td>
                                        <td><label for="item18">Cell 3</label></td>
                                        <td><label for="item18">Cell 4</label></td>
                                        <td><label for="item18">Cell 5</label></td>
                                        <td><label for="item18">Cell 6</label></td>
                                        <td><label for="item18">Cell 7</label></td>
                                        <td><label for="item18">Cell 8</label></td>
                                        <td><label for="item18">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item19"></td>
                                        <td><label for="item19">Cell 1</label></td>
                                        <td><label for="item19">Cell 2</label></td>
                                        <td><label for="item19">Cell 3</label></td>
                                        <td><label for="item19">Cell 4</label></td>
                                        <td><label for="item19">Cell 5</label></td>
                                        <td><label for="item19">Cell 6</label></td>
                                        <td><label for="item19">Cell 7</label></td>
                                        <td><label for="item19">Cell 8</label></td>
                                        <td><label for="item19">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item20"></td>
                                        <td><label for="item20">Cell 1</label></td>
                                        <td><label for="item20">Cell 2</label></td>
                                        <td><label for="item20">Cell 3</label></td>
                                        <td><label for="item20">Cell 4</label></td>
                                        <td><label for="item20">Cell 5</label></td>
                                        <td><label for="item20">Cell 6</label></td>
                                        <td><label for="item20">Cell 7</label></td>
                                        <td><label for="item20">Cell 8</label></td>
                                        <td><label for="item20">Cell 9</label></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                        </div>

                        <div class="table lista-product-table" id="lista-product-table">
                            <div class="options">
                                <div class="botones d-flex float-left">
                                    <div class="boton boton-inicial btn-aprob">
                                        <a href="" class="btn btn-secondary">Aprobado</a>
                                    </div>
                                    <div class="boton boton-medio btn-rechazado">
                                        <a href="" class="btn btn-secondary">Rechazado</a>
                                    </div>
                                    <div class="boton boton-medio btn-soli">
                                        <a href="" class="btn btn-secondary">Solicitado</a>
                                    </div>
                                    <div class="boton boton-medio btn-disp">
                                        <a href="" class="btn btn-secondary">Disponible</a>
                                    </div>
                                    <div class="boton boton-final btn-retrazo">
                                        <a href="" class="btn btn-secondary">Con retrazo</a>
                                    </div>
                                </div>
                                <div class="search float-right">
                                    <div class="search-group">
                                        <div class="text">
                                            <input type="text" name="" id="" placeholder="Buscar producto">
                                        </div>
                                        <div class="icono-search">
                                            <i class="fas fa-search"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-scroll-container">
                                <div class="table-scroll">
                                  <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th>Seleccionar</th>
                                        <th colspan="2">Head 1 + 2</th>
                                        <th>Head 3</th>
                                        <th>Head 4</th>
                                        <th>Head 5</th>
                                        <th colspan="2">Head 6 + 7</th>
                                        <th>Head 8</th>
                                        <th>Head 9</th>
                                      </tr>
                                    </thead>
                          
                                    <tbody>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item1"></td>
                                        <td><label for="item1">Cell 1</label></td>
                                        <td><label for="item1">Cell 2</label></td>
                                        <td><label for="item1">Cell 3</label></td>
                                        <td><label for="item1">Cell 4</label></td>
                                        <td><label for="item1">Cell 5</label></td>
                                        <td><label for="item1">Cell 6</label></td>
                                        <td><label for="item1">Cell 7</label></td>
                                        <td><label for="item1">Cell 8</label></td>
                                        <td><label for="item1">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item2"></td>
                                        <td><label for="item2">Cell 1</label></td>
                                        <td><label for="item2">Cell 2</label></td>
                                        <td><label for="item2">Cell 3</label></td>
                                        <td><label for="item2">Cell 4</label></td>
                                        <td><label for="item2">Cell 5</label></td>
                                        <td><label for="item2">Cell 6</label></td>
                                        <td><label for="item2">Cell 7</label></td>
                                        <td><label for="item2">Cell 8</label></td>
                                        <td><label for="item2">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item3"></td>
                                        <td><label for="item3">Cell 1</label></td>
                                        <td><label for="item3">Cell 2</label></td>
                                        <td><label for="item3">Cell 3</label></td>
                                        <td><label for="item3">Cell 4</label></td>
                                        <td><label for="item3">Cell 5</label></td>
                                        <td><label for="item3">Cell 6</label></td>
                                        <td><label for="item3">Cell 7</label></td>
                                        <td><label for="item3">Cell 8</label></td>
                                        <td><label for="item3">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item4"></td>
                                        <td><label for="item4">Cell 1</label></td>
                                        <td><label for="item4">Cell 2</label></td>
                                        <td><label for="item4">Cell 3</label></td>
                                        <td><label for="item4">Cell 4</label></td>
                                        <td><label for="item4">Cell 5</label></td>
                                        <td><label for="item4">Cell 6</label></td>
                                        <td><label for="item4">Cell 7</label></td>
                                        <td><label for="item4">Cell 8</label></td>
                                        <td><label for="item4">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item5"></td>
                                        <td><label for="item5">Cell 1</label></td>
                                        <td><label for="item5">Cell 2</label></td>
                                        <td><label for="item5">Cell 3</label></td>
                                        <td><label for="item5">Cell 4</label></td>
                                        <td><label for="item5">Cell 5</label></td>
                                        <td><label for="item5">Cell 6</label></td>
                                        <td><label for="item5">Cell 7</label></td>
                                        <td><label for="item5">Cell 8</label></td>
                                        <td><label for="item5">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item6"></td>
                                        <td><label for="item6">Cell 1</label></td>
                                        <td><label for="item6">Cell 2</label></td>
                                        <td><label for="item6">Cell 3</label></td>
                                        <td><label for="item6">Cell 4</label></td>
                                        <td><label for="item6">Cell 5</label></td>
                                        <td><label for="item6">Cell 6</label></td>
                                        <td><label for="item6">Cell 7</label></td>
                                        <td><label for="item6">Cell 8</label></td>
                                        <td><label for="item6">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item7"></td>
                                        <td><label for="item7">Cell 1</label></td>
                                        <td><label for="item7">Cell 2</label></td>
                                        <td><label for="item7">Cell 3</label></td>
                                        <td><label for="item7">Cell 4</label></td>
                                        <td><label for="item7">Cell 5</label></td>
                                        <td><label for="item7">Cell 6</label></td>
                                        <td><label for="item7">Cell 7</label></td>
                                        <td><label for="item7">Cell 8</label></td>
                                        <td><label for="item7">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item8"></td>
                                        <td><label for="item8">Cell 1</label></td>
                                        <td><label for="item8">Cell 2</label></td>
                                        <td><label for="item8">Cell 3</label></td>
                                        <td><label for="item8">Cell 4</label></td>
                                        <td><label for="item8">Cell 5</label></td>
                                        <td><label for="item8">Cell 6</label></td>
                                        <td><label for="item8">Cell 7</label></td>
                                        <td><label for="item8">Cell 8</label></td>
                                        <td><label for="item8">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item9"></td>
                                        <td><label for="item9">Cell 1</label></td>
                                        <td><label for="item9">Cell 2</label></td>
                                        <td><label for="item9">Cell 3</label></td>
                                        <td><label for="item9">Cell 4</label></td>
                                        <td><label for="item9">Cell 5</label></td>
                                        <td><label for="item9">Cell 6</label></td>
                                        <td><label for="item9">Cell 7</label></td>
                                        <td><label for="item9">Cell 8</label></td>
                                        <td><label for="item9">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item10"></td>
                                        <td><label for="item10">Cell 1</label></td>
                                        <td><label for="item10">Cell 2</label></td>
                                        <td><label for="item10">Cell 3</label></td>
                                        <td><label for="item10">Cell 4</label></td>
                                        <td><label for="item10">Cell 5</label></td>
                                        <td><label for="item10">Cell 6</label></td>
                                        <td><label for="item10">Cell 7</label></td>
                                        <td><label for="item10">Cell 8</label></td>
                                        <td><label for="item10">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item11"></td>
                                        <td><label for="item11">Cell 1</label></td>
                                        <td><label for="item11">Cell 2</label></td>
                                        <td><label for="item11">Cell 3</label></td>
                                        <td><label for="item11">Cell 4</label></td>
                                        <td><label for="item11">Cell 5</label></td>
                                        <td><label for="item11">Cell 6</label></td>
                                        <td><label for="item11">Cell 7</label></td>
                                        <td><label for="item11">Cell 8</label></td>
                                        <td><label for="item11">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item12"></td>
                                        <td><label for="item12">Cell 1</label></td>
                                        <td><label for="item12">Cell 2</label></td>
                                        <td><label for="item12">Cell 3</label></td>
                                        <td><label for="item12">Cell 4</label></td>
                                        <td><label for="item12">Cell 5</label></td>
                                        <td><label for="item12">Cell 6</label></td>
                                        <td><label for="item12">Cell 7</label></td>
                                        <td><label for="item12">Cell 8</label></td>
                                        <td><label for="item12">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item13"></td>
                                        <td><label for="item13">Cell 1</label></td>
                                        <td><label for="item13">Cell 2</label></td>
                                        <td><label for="item13">Cell 3</label></td>
                                        <td><label for="item13">Cell 4</label></td>
                                        <td><label for="item13">Cell 5</label></td>
                                        <td><label for="item13">Cell 6</label></td>
                                        <td><label for="item13">Cell 7</label></td>
                                        <td><label for="item13">Cell 8</label></td>
                                        <td><label for="item13">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item14"></td>
                                        <td><label for="item14">Cell 1</label></td>
                                        <td><label for="item14">Cell 2</label></td>
                                        <td><label for="item14">Cell 3</label></td>
                                        <td><label for="item14">Cell 4</label></td>
                                        <td><label for="item14">Cell 5</label></td>
                                        <td><label for="item14">Cell 6</label></td>
                                        <td><label for="item14">Cell 7</label></td>
                                        <td><label for="item14">Cell 8</label></td>
                                        <td><label for="item14">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item15"></td>
                                        <td><label for="item15">Cell 1</label></td>
                                        <td><label for="item15">Cell 2</label></td>
                                        <td><label for="item15">Cell 3</label></td>
                                        <td><label for="item15">Cell 4</label></td>
                                        <td><label for="item15">Cell 5</label></td>
                                        <td><label for="item15">Cell 6</label></td>
                                        <td><label for="item15">Cell 7</label></td>
                                        <td><label for="item15">Cell 8</label></td>
                                        <td><label for="item15">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item16"></td>
                                        <td><label for="item16">Cell 1</label></td>
                                        <td><label for="item16">Cell 2</label></td>
                                        <td><label for="item16">Cell 3</label></td>
                                        <td><label for="item16">Cell 4</label></td>
                                        <td><label for="item16">Cell 5</label></td>
                                        <td><label for="item16">Cell 6</label></td>
                                        <td><label for="item16">Cell 7</label></td>
                                        <td><label for="item16">Cell 8</label></td>
                                        <td><label for="item16">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item17"></td>
                                        <td><label for="item17">Cell 1</label></td>
                                        <td><label for="item17">Cell 2</label></td>
                                        <td><label for="item17">Cell 3</label></td>
                                        <td><label for="item17">Cell 4</label></td>
                                        <td><label for="item17">Cell 5</label></td>
                                        <td><label for="item17">Cell 6</label></td>
                                        <td><label for="item17">Cell 7</label></td>
                                        <td><label for="item17">Cell 8</label></td>
                                        <td><label for="item17">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item18"></td>
                                        <td><label for="item18">Cell 1</label></td>
                                        <td><label for="item18">Cell 2</label></td>
                                        <td><label for="item18">Cell 3</label></td>
                                        <td><label for="item18">Cell 4</label></td>
                                        <td><label for="item18">Cell 5</label></td>
                                        <td><label for="item18">Cell 6</label></td>
                                        <td><label for="item18">Cell 7</label></td>
                                        <td><label for="item18">Cell 8</label></td>
                                        <td><label for="item18">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item19"></td>
                                        <td><label for="item19">Cell 1</label></td>
                                        <td><label for="item19">Cell 2</label></td>
                                        <td><label for="item19">Cell 3</label></td>
                                        <td><label for="item19">Cell 4</label></td>
                                        <td><label for="item19">Cell 5</label></td>
                                        <td><label for="item19">Cell 6</label></td>
                                        <td><label for="item19">Cell 7</label></td>
                                        <td><label for="item19">Cell 8</label></td>
                                        <td><label for="item19">Cell 9</label></td>
                                      </tr>
                                      <tr>
                                        <td><input type="checkbox" name="" id="item20"></td>
                                        <td><label for="item20">Cell 1</label></td>
                                        <td><label for="item20">Cell 2</label></td>
                                        <td><label for="item20">Cell 3</label></td>
                                        <td><label for="item20">Cell 4</label></td>
                                        <td><label for="item20">Cell 5</label></td>
                                        <td><label for="item20">Cell 6</label></td>
                                        <td><label for="item20">Cell 7</label></td>
                                        <td><label for="item20">Cell 8</label></td>
                                        <td><label for="item20">Cell 9</label></td>
                                      </tr>
                                    </tbody>
                                  </table>
                                </div>
                            </div>
                          
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="botones-footer">
        <div class="content">
            <div class="botones-abl-footer">
                <div class="float-left boton wow pulse" data-wow-iteration="infinite" data-wow-duration="500ms">
                    <a href="/inicio.html" class="boton btn btn-primary"><i class="fas fa-chevron-circle-left"></i></a>
                </div>
                <div class="float-right boton wow pulse" data-wow-iteration="infinite" data-wow-duration="500ms">
                    <a class="boton btn btn-primary"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="content">
                <p>Todos los derechos reservados © Stock Sistem 2021</p>
            </div>
        </div>
    </footer>
    <!-- lib -->
    <link rel="stylesheet" href="lib/animate/animate.min.css">

    <!-- scrip lib -->
    <script src="lib/wow/wow.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/jquery/jquery-migrate.min.js"></script>
    <script src="lib/jquery/jquery.min.js"></script>

    <!-- scrip main -->
    <script src="js/main.js"></script>
    
</body>
</html>