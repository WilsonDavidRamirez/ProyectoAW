<?php
session_start();
error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ServiEntrega</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/Count_Us.css" />
</head>

<body>

    <div class="wrapper">
        <header class="header-mobile">
            <h1 class="logo">Stock X</h1>
            <button class="open-menu" id="open-menu">
                <i class="bi bi-list"></i>
            </button>
        </header>
        <aside>
            <button class="close-menu" id="close-menu">
                <i class="bi bi-x"></i>
            </button>
            <header>
                <h1 class="logo">Stock X</h1>
                <p id="usuario" data-usuario="<?php echo $_SESSION["email"];?>"></p>
                <?php
                if (isset($_SESSION["email"])) {
                    // Usuario en sesión
                    echo "Welcome, " . $_SESSION["email"] . ". <div><br></div>";
                    echo '<form action="logout.php" method="post">';
                    echo '<button type="submit"  class="btnContact" title="Cerrar sesión">logout</button>';
                    echo '</form>';
                } else {
                    // Usuario no en sesión
                    if (isset($_GET["type"]) && $_GET["type"] === "sneakers") {
                        // Mostrar botón de inicio de sesión si no está en sesión y en la página "sneakers"
                        echo '<a href="login.php" class="btnContact" style="text-decoration:none;">Login</a>';
                    } else {
                        // Mostrar botón de inicio de sesión si no está en sesión en otras páginas
                        echo '<a href="login.php" class="btnContact" style="text-decoration:none;">Login</a>';
                    }
                }
                ?>
            </header>
            <nav>
                <ul>
                    <li>
                        <a class="boton-menu boton-volver" href="./Productos.php">
                            <i class="bi bi-arrow-return-left"></i> Seguir comprando
                        </a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito active" href="./carrito.php">
                            <i class="bi bi-cart-fill"></i> Carrito
                        </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2023 ServiEntrega</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                <p id="carrito-vacio" class="carrito-vacio">Tu carrito está vacío. <i class="bi bi-emoji-frown"></i></p>

                <div id="carrito-productos" class="carrito-productos disabled">
                    <!-- Esto se va a completar con el JS -->
                </div>

                <div id="carrito-acciones" class="carrito-acciones disabled">
                    <div class="carrito-acciones-izquierda">
                        <button id="carrito-acciones-vaciar" class="carrito-acciones-vaciar">Vaciar carrito</button>
                    </div>
                    <?php
                    // Verificar si el usuario está en sesión y mostrar el botón "Comprar ahora"
                    if (isset($_SESSION["email"])) {
                        echo '<div class="carrito-acciones-derecha">';
                        echo '    <div class="carrito-acciones-total">';
                        echo '        <p>Total:</p>';
                        echo '        <p id="total">$3000</p>';
                        echo '    </div>';
                    }
                    ?>
                    <?php
                    // Verificar si el usuario está en sesión y mostrar el botón "Comprar ahora"
                    if (isset($_SESSION["email"])) {
                        echo '<button id="carrito-acciones-comprar" class="carrito-acciones-comprar">Comprar ahora</button>';
                    } else {
                        echo '<div class="carrito-acciones-derecha">';
                        echo '    <a href="login.php" class="carrito-acciones-vaciar">Login</a>';
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>

            <p id="carrito-comprado" class="carrito-comprado disabled">Muchas gracias por tu compra. <i
                    class="bi bi-emoji-laughing"></i></p>

    </div>
    </main>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./js/carrito.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>
