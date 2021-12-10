<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockSystem - Loguin</title>
    <link rel="icon" href="img/LOGO-ICON.ico">
    <script src="https://kit.fontawesome.com/7f19db1c03.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS File -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fjalla+One&family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body class="Stocksystemloguin">
    <section class="logo-loguin">
        <img src="img/LOGO2.png" alt="">
    </section>
    <section class="titulo">
        <h1> <span>s</span>tock <span>s</span>ystem</h1> 
        <img src="img/DESARROLLO.png" alt="">
    </section>
    <section id="login">
            <div class="content-1">
                <div class="tittle">
                    <h2> <b>¡Bienvenido!</b></h2>
                    <p>Este es tu espacio de trabajo</p> 
                </div>
                <div class="content-text">
                    <div>
                        <p>Debes ingresar una cuenta y contraseña válida para poder acceder al sistema. 
                            Si no recuerdas tu contraseña, puedes clickear en <i>"¿Olvidaste tu contraseña?"</i></p>
                    </div>
                </div>
            </div>
            <div class= "triangulo">
                <img src="img/TRIANGULO2.png" alt="">
            </div>
            <div class="content-2">
                <div class="form-login">
                    <form action="login.php" method="post">
                        <div class="tittle">
                            <h4><b>login</b></h4>
                        </div>
                        <div class="form-group">
                            <i class="fas fa-user"></i>
                            <input type="text" name="user" id="" placeholder="Usuario">
                        </div>
                        <div class="form-group">
                            <i class="fas fa-unlock-alt"></i>
                            <input type="password" name="password" id="" placeholder="Contraseña">
                        </div>
                        <div class="password d-flex">
                            <!-- <div class="recordar">
                                <label for="recordar"><input type="checkbox" name="" id="recordar"> Recordar </label>
                            </div> -->
                            <div class="recuperar">
                                <a href="">¿Olvidaste tu contraseña?</a>
                            </div>
                        </div>
                        <button type="submit" value="Send">Ingresar</button>
                    </form>  
                </div>
            </div> 
    </section>
    <section class="link-pag">
        <a href="../index.html" target="_blank"> <b> visitar página web </b></a> 
    </section>
    <footer id="footer-login">
        <div class="footer-container">
            <div class="content">
                <p> <b>StockSystem - Aplicativo web. Todos los derechos reservados a StockSystem ©</b> </p>
            </div>
        </div>
    </footer>
</body>
</html>