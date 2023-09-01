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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
                        <a href="home.php">
                            <button id="todos" class="boton-menu boton-categoria "><i
                                    class="bi bi-hand-index-thumb-fill"></i>Stock X</button>
                        </a>
                    </li>
                    <li>
                        <a href="Productos.php?type=sneakers">
                            <button id="abrigos" class="boton-menu boton-categoria">
                                <i class="bi bi-hand-index-thumb"></i> Sneakers
                            </button>
                        </a>
                    </li>

                    <li>
                        <button id="camisetas" class="boton-menu boton-categoria active"><i
                                class="bi bi-hand-index-thumb"></i>
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
                <div class="container">
                    <div class="contact__wrapper shadow-lg mt-n9">
                        <center>
                            <h2>Contact Us</h2>
                        </center>
                        <div class="row no-gutters">
                            <div class="contact-form__wrapper p-5 order-lg-1">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="firstName" name="firstName"
                                                placeholder="First Name *">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="lastName" name="lastName"
                                                placeholder="Last Name *">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Email *">
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="phone" name="phone"
                                                placeholder="Phone Number *">
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mb-3">
                                        <div class="form-group">
                                            <label class="required-field" for="message">How can we help?</label>
                                            <textarea class="form-control" id="message" name="message" rows="4"
                                                placeholder="Hi there, I would like to....."></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 mb-3 center-button">
                                        <input type="button" id="btnSubmit" class="btnContact" value="Submit" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <br>
                <br>

                <div class="container">
                    <div class="contact__wrapper shadow-lg mt-n9">
                        <center>
                            <h2>Work With Us</h2>
                        </center>
                        <div class="row no-gutters">
                            <div class="contact-form__wrapper p-5 order-lg-1">
                                <div class="row">
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="txtName" name="txtName"
                                                placeholder="Name *">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="txtPhone" name="txtPhone"
                                                placeholder="Phone Number *">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="txtAddress" name="txtAddress"
                                                placeholder="Address *">
                                        </div>
                                    </div>


                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="txtEmail" name="txtEmail"
                                                placeholder="Email *">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="txtCity" name="txtCity"
                                                placeholder="City *">
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <select name="puesto" id="puesto" class="form-control">
                                                <option value="Sales Associate">Sales Associate</option>
                                                <option value="Visual Merchandiser">Visual Merchandiser</option>
                                                <option value="Warehouse/logistics staff">Warehouse/logistics staff
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-3">
                                        <div class="form-group">
                                            <label for="cv">Update CV</label>
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="cv" name="cv"
                                                    accept="application/pdf" onchange="updateFileNameDisplay(this)">
                                                <label class="custom-file-label" for="cv" id="cv-label">Select
                                                    CV</label>
                                            </div>
                                        </div>
                                    </div>

                                    <script>
                                    function updateFileNameDisplay(input) {
                                        const fileName = input.files[0].name;
                                        const fileLabel = document.getElementById('cv-label');
                                        fileLabel.textContent = fileName;
                                    }
                                    </script>

                                    <div class="col-sm-12 mb-3 center-button">
                                        <div class="form-group">
                                            <input type="button" id="btnSubmit2" class="btnContact"
                                                value="Send Application" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </main>
    </div>



</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
    integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<script src="./js/ContactUs.js"></script>
<script src="./js/Work_with_us.js"></script>

</html>