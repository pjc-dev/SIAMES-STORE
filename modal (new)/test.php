<?php

require "config/database.php";
$db = new Database();
$con = $db->conectar();

$sql = $con->prepare("SELECT id, nombre, descripcion, precio FROM productos WHERE activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>SIAMES STORE - Hardware shop</title>
        <link rel="icon" href="img/SS2.png" type="image/icon type">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=DM+Sans%3A700%7CHeebo%3A400%2C700%7CAldrich%3A400&#038;display=swap&#038;ver=6.0.2' media='all'>
    </head>

    <body>

        <section id="home">
            <div class="img"></div>
            <div class="centered">
                <div id="title"></div>
            </div>
            <div class="scrolldown">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </section>
        
        <section id="products">
            <div id="h2">
                <h1 class="animated-shadow">NUESTROS PRODUCTOS</h1>
            </div>
            <ul class="nav">
                <li><a href="#">PANTALLAS</a></li>
                <li><a href="#">TECLADOS</a></li>
                <li><a href="#">MOUSE</a></li>
                <li><a href="#">GABINETES</a></li>
                <li><a href="#">MÁS PRODUCTOS</a></li>
            </ul>
            <div id="container">
                <div class="card">
                    <div class="face front">
                        <img src="css/img/teclado1.jpg">
                        <div>
                            <h3>RAZER HUNTSMAN</h3>
                            <h4><span>$</span>120.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>TECLADO GAMER RAZER HUNTSMAN MINI RGB MECANICO MX PURPLE</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="css/img/mouse.jpeg">
                        <div>
                            <h3>MOUSE GAMER</h3>
                            <h4><span>$</span>20.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>MOUSE GAMER RAZER VIPER 8KHZ AMBIDEXTROUS WIRED</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="css/img/pantalla1.jpeg">
                        <div>
                            <h3>PANTALLA CURVA</h3>
                            <h4><span>$</span>22.220</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>MONITOR VIEWSONIC 24″ VX2468-PC-MHD VA 165HZ 1MS CURVO</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="css/img/gabinete.jpeg">
                        <div>
                            <h3>GABINETE GAMER</h3>
                            <h4><span>$</span>1.200.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>GABINETE GAMER AEROCOOL CRONUS-G-BK-1 1 FAN RGB (MID TOWER)</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>  
                <div class="card">
                    <div class="face front">
                        <img src="css/img/teclado2.jpg">
                        <div>
                            <h3>TECLADO GAMER</h3>
                            <h4><span>$</span>220.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>TECLADO GAMER RAZER HUNTSMAN MINI MERCURY LINEAR RED</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="css/img/mouse2.jpg" class="MOUSE">
                        <div>
                            <h3>MOUSE GAMER</h3>
                            <h4><span>$</span>20.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>MOUSE GAMER RAZER VIPER 8KHZ AMBIDEXTROUS WIRED</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="css/img/monitor2.jpg">
                        <div>
                            <h3>PANTALLA GAMER</h3>
                            <h4><span>$</span>120.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>MONITOR GIGABYTE 24″ G24F IPS 165HZ 1MS/p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="face front">
                        <img src="css/img/gabinete2.png">
                        <div>
                            <h3>GABINETE GAMER</h3>
                            <h4><span>$</span>120.000</h4>
                        </div>
                    </div>
                    <div class="face back">
                        <p>GABINETE GAMER THERMALTAKE H550 TG ARGB BLACK</p>
                        <div class="link">
                            <a href="#">Más información</a>
                        </div>
                    </div>
                </div>    
            </div>
            <div class="contenedor">
                <form action="">
                    <h1>INGRESA TU MAIL AQUÍ</h1>
                    <p>recibi ofertas y nuestros nuevos productos</p>
                    <div class="email-box">
                    <input class="tbox" type="email" name="" value="" placeholder="Enter your email">
                    <button class="btn" type="button" name="button">Subscribe</button>
                    </div>
                </form>
                </div>
            </div>
        </section>

    </body>
</html>