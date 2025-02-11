<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundación Rosario</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .top-bar {
            background: #4CAF50; /* Verde agradable */
            color: white;
            text-align: center;
            padding: 10px;
        }
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            padding: 15px 50px;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        nav ul li {
            display: inline;
        }
        nav ul li a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }
        .hero {
            position: relative;
            text-align: center;
        }
        .hero img {
            width: 100%;
            height: auto;
        }
        .overlay {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 20px;
            border-radius: 10px;
        }
        button {
            background: yellow;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background: #e6e600;
        }
        .banner {
            background: yellow;
            padding: 20px;
            text-align: center;
        }
        .new-section {
            display: grid;
            grid-template-columns: 1fr;
            gap: 2rem;
            padding: 40px;
            background: #f8f8f8;
        }
        @media (min-width: 768px) {
            .new-section {
                grid-template-columns: repeat(3, 1fr);
            }
        }
        .text-center {
            text-align: center;
            grid-column: 1 / -1;
        }
        .video {
            width: 100%;
            height: 400px;
            border-radius: 16px;
        }
        .card {
            background: linear-gradient(145deg, #ffffff, #f6f6f6);
            border-radius: 20px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 2rem;
            text-align: center;
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        .card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }
        
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                90deg,
                transparent,
                rgba(255, 255, 255, 0.2),
                transparent
            );
            transition: 0.5s;
        }
        
        .card:hover::before {
            left: 100%;
        }
        
        .card h3 {
            color: #333;
            font-size: 1.5rem;
            margin-bottom: 1.5rem;
            position: relative;
            padding-bottom: 0.5rem;
        }
        
        .card h3::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 3px;
            background: #4CAF50; /* Verde agradable */
            transition: width 0.3s ease;
        }
        
        .card:hover h3::after {
            width: 100px;
        }
        
        .card i {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #4CAF50; /* Verde agradable */
            transition: transform 0.3s ease;
            display: block;
        }
        
        .card:hover i {
            transform: scale(1.2) rotate(5deg);
        }
        
        .card ul {
            list-style: none;
            padding: 0;
            margin: 1rem 0;
        }
        
        .card ul li {
            padding: 0.5rem 0;
            color: #666;
            transition: color 0.3s ease;
        }
        
        .card:hover ul li {
            color: #333;
        }
        
        .card ul li:before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            margin-right: 8px;
            color: #4CAF50; /* Verde agradable */
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .card:hover ul li:before {
            opacity: 1;
        }
    </style>
</head>
<body>
    <header>
        <div class="top-bar">
            <p>(+57) 6056816687 - 3205492104 | fundacionelrosario@hotmail.com</p>
        </div>
        <nav>
            <div class="logo">
                <img src="imagenes/logo.png" alt="Logo Fundación Rosario">
                <h1>FUNDACIÓN ROSARIO</h1>
            </div>
            <ul>
                <li><a href="#">CONÓCENOS</a></li>
                <li><a href="#">PROGRAMAS</a></li>
                <li><a href="#">SERVICIOS</a></li>
                <li><a href="#">ACTUALIDADES</a></li>
                <li><a href="#">DESCARGAS</a></li>
            </ul>
        </nav>
    </header>
    
    <section class="hero">
        <img src="imagenes/portada.jpg" alt="Imagen principal">
        <div class="overlay">
            <h2>AYÚDANOS A CUBRIR LAS NECESIDADES VITALES DE NIÑOS EN CONDICIÓN DE DISCAPACIDAD Y SUS FAMILIAS.</h2>
            <h3>¡HAZ TU DONACIÓN AHORA!</h3>
            <button>DONA AHORA</button>
        </div>
    </section>
    
    <section class="banner">
        <div class="donation-info">
            <p><strong>¿Quieres apoyar nuestra labor?</strong> Favor realizar sus donaciones a través de la cuenta de ahorros <strong>Bancolombia No. 11111111111</strong></p>
            <p>Fundación Rosario Nit : 890.480.249-4 <strong>Para donaciones en línea</strong> favor <a href="#">hacer clic en el siguiente botón:</a> <img src="https://via.placeholder.com/50" alt="PSE"></p>
            <p>Por favor indique en la transferencia su correo electrónico para que podamos enviarle un recibo de donación.</p>
        </div>
    </section>
    
    <section class="new-section">
        <div class="text-center">
            <iframe class="video" src="https://www.youtube.com/embed/TMJ-qN_TgdM" title="Video de ejemplo" frameborder="0" allowfullscreen></iframe>
        </div>
        
        <div class="card">
            <i class="fas fa-heart-pulse"></i>
            <h3>ATENCIÓN INTEGRAL</h3>
            <ul>
                <li>Primera Infancia/Atención Temprana</li>
                <li>Programa Escolar</li>
            </ul>
        </div>
        
        <div class="card">
            <i class="fas fa-users-between-lines"></i>
            <h3>SENSIBILIZACIÓN</h3>
            <ul>
                <li>Eventos culturales y deportivos</li>
                <li>Programa de intercambio escolar</li>
            </ul>
        </div>
        
        <div class="card">
            <i class="fas fa-graduation-cap"></i>
            <h3>CAPACITACIÓN</h3>
            <ul>
                <li>Empoderamiento a las familias</li>
                <li>Capacitación continua al equipo</li>
            </ul>
        </div>
    </section>
</body>
</html>