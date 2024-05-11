<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de suscripción</title>
    <style>
        /* Estilos generales */
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1, p {
            margin: 0;
            padding: 0;
        }
        a {
            color: #007bff;
        }
        /* Estilos específicos para el contenido */
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .discount {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            padding: 10px 0;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        .discount p {
            margin: 0;
        }
        .btn {
            margin: 0px auto;
            display: inline-block;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>¡Gracias por suscribirte!</h1>
            <p>Ahora puedes obtener un 25% de descuento en tu primera compra de un videojuego.</p>
        </div>
        <div class="discount">
            <p>Utiliza el código de descuento <strong>VIDEOGAME25</strong> al finalizar tu compra para recibir tu descuento.</p>
        </div>
        <p>Visita nuestra tienda de videojuegos para encontrar los últimos títulos y disfrutar de tu descuento.</p>
        <p style="display: flex"><a class="btn" href="http://127.0.0.1:8000/">Ir a la tienda</a></p>
        <div class="footer">
            <p>Este correo electrónico fue enviado automáticamente. Por favor, no respondas a este mensaje.</p>
        </div>
    </div>
</body>
</html>