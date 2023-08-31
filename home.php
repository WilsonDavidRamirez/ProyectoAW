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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="./css/main.css">

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
                <h1>Stock X</h1>
                <div id="mensaje-bienvenida">
                    <?php
                    // Verificar si el usuario está en sesión y mostrar el mensaje y el botón de cierre de sesión
                    if (isset($_SESSION["email"])) {
                        echo "Bienvenido, " . $_SESSION["email"] . ". Estás en sesión.";
                        echo '<form action="logout.php" method="post">';
                        echo '<button type="submit" title="Cerrar sesión">Cerrar sesión</button>';
                        echo '</form>';
                    } else {
                        // Mostrar botón para iniciar sesión si no está en sesión
                        echo '<a href="login.php">Iniciar sesión</a>';
                    }
                    ?>
                </div>
            </header>
            <br> <br> <br> <br> <br> <br> <br>
            <nav>
                <ul class="menu">
                    <li>
                        <button id="todos" class="boton-menu boton-categoria active"><i
                                class="bi bi-hand-index-thumb-fill"></i>Stock X</button>
                    </li>
                    <li>
                        <a href="wilo.php?type=sneakers">
                            <button id="abrigos" class="boton-menu boton-categoria">
                                <i class="bi bi-hand-index-thumb"></i> Sneakers
                            </button>
                        </a>
                    </li>

                    <li>
                        <button id="camisetas" class="boton-menu boton-categoria"><i class="bi bi-hand-index-thumb"></i>
                            Cont Us</button>
                    </li>
                </ul>
            </nav>
            <br> <br> <br> <br> <br> <br> <br> <br>
            <footer>
                <p class="texto-footer">© 2023 Stock X</p>
            </footer>
        </aside>
        <main>
            <div id="contenedor-productos">

            </div>
        </main>
    </div>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
        integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

    <script src="./js/main.js"></script>
    <script src="./js/menu.js"></script>

</body>

</html>