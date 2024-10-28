<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colegio San Jose De Guanenta</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .header {
            background-color: #FFC107;
            color: #000;
            padding: 20px;
            text-align: left;
            position: relative;
        }
        .header-logo {
            width: 90px;
            float: left;
            margin-right: 20px;
        }
        .header-text {
            display: inline-block;
            font-size: 24px;
            font-weight: bold;
        }
        .header-text span {
            display: block;
            font-size: 18px;
            color: #C21807;
        }
        .header-info {
            position: absolute;
            top: 20px;
            right: 20px;
            display: flex;
            flex-direction: column;
            gap: 5px;
        }
        .header-info a {
            background-color: #0056b3;
            color: #FFF;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 14px;
            display: flex;
            align-items: center;
            gap: 5px;
        }
        .nav-bar {
            background-color: #0000FF;
            padding: 10px;
            text-align: center;
        }
        .nav-bar a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            margin: 0 5px;
        }
        .banner {
            background-image: url('img/2web.jpg');
            background-size: cover;
            background-position: center;
            padding: 165px 20px;
            text-align: center;
            color: #FFF;
        }
        .banner-text {
            font-size: 28px;
            font-weight: bold;
        }
        .banner-subtext {
            font-size: 24px;
            color: #FFF;
            font-weight: bold;
            margin-top: 10px;
        }
        .footer {
            background-color: #0056b3;
            padding: 40px;
            min-height: 50px;
            text-align: center;
            color: white;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="header">
        <img src="img/escudo.png" alt="Escudo Colegio" class="header-logo">
        <div class="header-text">
            COLEGIO SAN JOSE DE GUANENTA
            <span>SER GUANENTINO HONOR QUE CUESTA</span>
            <span>comprometidos con la educación santandereana desde 1785</span>
        </div>
        <div class="header-info">
            <a href="#">Registra tus datos para la prom aquí</a>
        </div>
    </div>
    <div class="nav-bar">
        <a href="#">Inicio</a>
        <a href="#">Nuestro Colegio</a>
        <a href="#">Especialidades</a>
        <a href="#">11-1</a>
        <a href="#">11-2</a>
        <a href="#">11-3</a>
        <a href="#">11-4</a>
        <a href="#">11-5</a>
    </div>

    <div class="banner">
        <div class="banner-text"></div>
        <div class="banner-subtext"></div>
    </div>

    <div class="footer">
        La promoción de los 200 años.<br>
        Página para destacar la prom 2024.
    </div>
</body>
</html>
