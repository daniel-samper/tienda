<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Tienda de camisetas</title>
</head>
<body>
    <div id="container">
    <!-- Encabezado -->
     <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta Logo">
            <a href="index.php">
                Tienda de camisetas
            </a>
        </div>  

    </header>
    <!-- Menu -->
     <nav id="menu">
        <ul>
            <li>
                <a href="#">Inicio</a>
            </li>
            <li>
                <a href="#">Tienda</a>
            </li>
            <li>
                <a href="#">Contacto</a>
            </li>
            <li>
                <a href="#">Mi cuenta</a>
            </li>
        </ul>
    </nav>
    <div id="content">
    <!-- Barra lateral -->
     <aside id="lateral">
        <div id="login" class="block_aside">
            <h3>Entrar a la web</h3>
            <form action="#" method="post">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password">
                <input type="submit" value="Enviar">
            </form>
            <ul>
                <li><a href="#">Mis pedidos</a></li>
                <li><a href="#">Gestionar pedidos</a></li>
                <li><a href="#">Gestionar categorias</a></li>
            </ul>
        </div>
     </aside>

    <!-- Contenido central -->
     <div id="central">
        <h1>Productos destacados</h1>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Camiseta">
            <h2>Camiseta azul ancha</h2>
            <p>30 euros</p>
            <a href="#" class="button">Comprar</a>
        </div>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Camiseta">
            <h2>Camiseta azul ancha</h2>
            <p>30 euros</p>
            <a href="#" class="button">Comprar</a>
        </div>
        <div class="product">
            <img src="assets/img/camiseta.png" alt="Camiseta">
            <h2>Camiseta azul ancha</h2>
            <p>30 euros</p>
            <a href="#" class="button">Comprar</a>
        </div>

    </div>
   
    </div>
     <!-- Pie de página --> 
     <footer id="footer">
        <p>Desarrollado por Daniel Samper &copy; <?= date('Y') ?></p>
     </footer>
</body>
</html>