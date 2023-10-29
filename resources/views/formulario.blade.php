<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <title>Formulario</title>
</head>
<body>
    <h1 style="margin-left: 10%; padding:2%">Registro</h1>
    <div style="margin-left: 2%; box-shadow: 0px 0px 30px rgb(131, 121, 121); width:30%; padding:2%">
        <div>
            <label >Nombre</label> <br>
            <input type="text"placeholder="Escribe tu nombre">
        </div>
        <div>
            <label >Apellidos</label> <br>
            <input type="text"placeholder="Escribe tus apellidos">
        </div>
        <div>
            <label >Correo</label> <br>
            <input type="email"placeholder="Escribe tu correo">
        </div>
        <div>
            <label >Contraseña</label> <br>
            <input id="passwordHelpBlock" class="form-text" type="password" placeholder="Escribe tu contraseña">
        </div>
        <div>
            <label for="">Direccion de contacto</label> <br>
            <textarea name="" id="" cols="30" rows="5" placeholder="Escribe tu direccion"></textarea>
        </div>
        <div style="margin-left: 2%">
            <button type="button" class="btn btn-success" onclick="alert('Has sido registrado, puedes continuar navegando :)');">Registrarme</button>
        </div>
    </div>    

    <div style="position: absolute;left:35%; top:5%">
        <img src="https://www.solerpalau.com/es-es/blog/wp-content/uploads/2016/11/iStock_72599351_SMALL-1.jpg" class="img-thumbnail" alt="...">
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
