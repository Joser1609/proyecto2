<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Login - contacto U La Salle</title>
    <style>
        body {
            margin: 0;
            padding: 10;
            font-family: 'Segoe UI', sans-serif;
            background-color: #cfcfcf;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            flex-direction: column;
        }

        form {
            background-color: #2c2f35;
            padding: 100px 70px;
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.3);
            width: 450px;
            color: #fff;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
        }

        p {
            position: relative;
            margin-bottom: 20px;
            font-size: 18px;
            color: #ffffff;
        }

        input[type="text"],
        input[type="password"] {
            width: 90%;
            padding: 10px 10px 10px 35px;
            border: none;
            border-radius: 5px;
            background-color: #464d5a;
            color: rgb(106, 100, 100);
            font-size: 16px;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 10px;
        }

        .button-group input[type="submit"] {
            flex: 1;
            padding: 10px;
            font-size: 16px;
            border-radius: 10px;
            border: none;
            cursor: pointer;
            transition: background 0.3s;
            background-color: #0fd387;
            color: black;
        }

        .button-group input[type="submit"]:hover {
            background-color: #0bb76f;
        }

        .bad {
            color: red;
            text-align: center;
            margin-top: 15px;
            font-size: 18px;
        }
    </style>
</head>
<body>

    <form action="validar.php" method="post">
        <h1>contacto U La Salle</h1>
        <p>Usuario<br>
            <input type="text" placeholder="Ingrese su usuario" name="usuario" required>
        </p>
        <p>Contraseña<br>
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña" required>
        </p>
        <div class="button-group">
            <input type="submit" value="Ingresar">
        </div>
    </form>

    <!-- Mensaje de error opcional (controlado por la URL) -->
    <div id="error" class="bad" style="display: none;">
        Error en la autenticación
    </div>

    <script>
        // Mostrar el mensaje de error si la URL contiene ?error=1
        const params = new URLSearchParams(window.location.search);
        if (params.get('error') === '1') {
            document.getElementById('error').style.display = 'block';
        }
    </script>

</body>
</html>