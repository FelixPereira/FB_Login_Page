<?php


    include "connection.php";

    if(isset($_POST["enter"])){

        $userEmail = $_POST["email"];
        $userPassword = $_POST["password"];

        $sql = "INSERT INTO user (userEmail, userPassword) VALUES ('$userEmail', '$userPassword')";

        $teste = mysqli_query($connect, $sql);

          
       
 
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Form</title>
</head>
<body>
    <div class="loginForm">
        <header>
            <span>facebook</span>
            <a href="register.html" class="createAccountTop">Criar conta</a>
        </header>
        

        <form action="" method="post">
            <label for="email"> Número de telefone ou e-mail</label><br>

            <textarea name="email" id="email" cols="85" rows="3"></textarea><br>

            <label for="password">Palavra-passe</label> <br>
            <input type="password" name="password" id="password" class="inputs"> <br><br>

            <input type="submit" name="enter" value="Iniciar sessão" class="submit">
        <footer>
            <p>Ou</p>
            <a href="register.html" class="createAccountBellow">Criar nova conta</a>
            <a href="#" class="forgotPassword">Não sabes a tua palavra-passe?</a>
        </footer>
           
        </form>

    
    </div>
</body>
</html>

