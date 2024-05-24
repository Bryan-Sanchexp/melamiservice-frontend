<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="/ESTILOS/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>
<body> 
    <div class="container" id="signup">
        <div class="img-contenido">
        <img src="/img/melamiLOGIN.jpg" alt="LOGOEMPRESA">
        </div>
        
        <h1 class="form-title">Solicitud</h1>
        <form action="" method="post">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="Nombre" required>
                <label for="fName">Nombre</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Apellido" required>
                <label for="lName">Apellidos</label>
            </div>    
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>

            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="email">Contraseña</label>

            </div><br><br>

            <input type="submit" class="btn" value="Sing up" name="Sing up">
            
            
        </form>
        <p class="or">
                --------------------------------
            </p>
            <div class="links">
                <p >Tienes una cuenta?</p>
                <button id="SignInButtom">Ingresar</button>
            </div>

    </div>

    <div class="container" id="signup">
        <div class="img-contenido">
        <img src="/img/melamiLOGIN.jpg" alt="LOGOEMPRESA">
        </div>
            <h1 class="form-title">Ingresar</h1>
            <form action="" method="post">
            <p class="text-presenta">Ingrese sus credenciales para acceder a su cuenta</p><br>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="email" required>
                <label for="email">Email</label>

            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="password" required>
                <label for="email">Contraseña</label>
    
            </div><br><br>

            <input type="submit" class="btn" value="Sing up" name="Sing up">

        </form>
        <p class="or">
                --------------------------------
            </p>
            <div class="links">
                <p>No tienes cuenta, solicita una   </p>
                <button id="SignUpButtom">Solicitar</button>
            </div>
        </div>
</body>
</html>