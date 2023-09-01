<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stock X</title>
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
                <h1 class="logo"> Stock X</h1>
                <br>
                <br>
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
                        // Mostrar botón de inicio de sesión si no está en sesión y en la página "sneakers">';
                        echo '<p><a href="login.php" class="btnContact" style="text-decoration:none;">Login</a></p>';
                
                    } else {
                        // Mostrar botón de inicio de sesión si no está en sesión en otras páginas
                        echo '<p><a href="login.php" class="btnContact" style="text-decoration:none;">Login</a></p>';
                    }
                }
                ?>


            </header>
            <nav>
                <ul class="menu">
                    <li>
                        <button id="todos" class="boton-menu boton-categoria active"><i
                                class="bi bi-hand-index-thumb-fill"></i>All the products</button>
                    </li>
                    <li>
                        <button id="casual" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>
                        Casual</button>
                    </li>
                    <li>
                        <button id="sporting" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>
                        Sporting</button>
                    </li>
                    <li>
                        <button id="formals" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>
                        Formals</button>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="./carrito.php">
                            <i class="bi bi-cart-fill"></i> Shopping cart <span id="numerito" class="numerito">0</span>
                        </a>
                    </li>
                    <li>
                        <a class="boton-menu boton-carrito" href="./home.php   ">
                            <i class="bi bi-arrow-return-left"></i> Go back </a>
                    </li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2023 Stock X</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal" id="titulo-principal">All the products</h2>
            <div id="contenedor-productos" class="contenedor-productos">

        </main>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="./js/Productos.js"></script>
    <script src="./js/menu.js"></script>
</body>

</html>
