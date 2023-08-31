<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Inicio de sesion</title>
</head>
<style>
    body{
    background-image: radial-gradient(circle at 50% -20.71%, #a6ffa7 0, #90ffab 12.5%, #76ffb0 25%, #54ffb5 37.5%, #08ffbb 50%, #00fbc2 62.5%, #00f8ca 75%, #00f4d3 87.5%, #00f1dc 100%);
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    flex-direction: column;
}

*{
    font-family: 'Lato', sans-serif;
    font-family: 'Open Sans', sans-serif;
    font-family: 'PT Sans', sans-serif;
    box-sizing: border-box;
}


form{
    width: 600px;
    border:  2px solid black;
    padding: 6rem;
    background-color: black;
    border: none;
    border-radius: 20px;
    color: aliceblue;
}
h1{
    display: block;
    border: 2px solid black;
    width: 95%;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;
}

label{
    color: aliceblue;
    font-size: 18px;
    padding: 11px;
    font-weight: 350;
}

input{
    display: block;
    border: 2px solid black;
    width: 95%;
    padding: 10px;
    margin: 10px;
    border-radius: 10px;
}

button{
    float: right;
    background-color: #00f1dc;
    padding: .5rem;
    color: white;
    border: none;
    width: 60%;
    border-radius: 5px;
    margin-right: 10px;
    text-decoration: none;
}

button:hover{
    background-color: white;
    color: black;
}

a{
    float: left;
    margin-left: 10px;
    padding: .5rem;
    text-decoration: none;
}
a:hover{
    color: white;
}

.error{
    background-color: rgb(175, 74, 74);
    color: black;
    padding: 10px;
    width: 95%;
    border-radius: 5px;
    margin: 20px auto;
}
</style>
<body>
    <form action="IniciarSesion.php" method="POST">
        <h1>INICIAR SESION</h1>
        <hr>
        <?php 
            if (isset($_GET['error'])) {
            ?>
            <p class="error">
                <?php
                echo $_GET['error']
                ?>
                
            </p>
        <?php    
            }
        ?>

        <hr>
        <i class="fa-solid fa-user"></i>
        <label>Usuario</label>
        <input type="text" name="Usuario" placeholder="Nombre de usuario">

        <i class="fa-solid fa-unlock"></i>
        <label>Clave</label>
        <input type="password" name="Clave" placeholder="Clave">
        <hr>
        <button type="submit">Iniciar Sesion</button>
        <a href="CrearCuenta.php">Crear Cuenta</a>
    </form>
</body>
</html>