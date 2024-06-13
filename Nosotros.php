<?php
session_start();
$usuario = $_SESSION['cliente'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Style.css">
    <title>Nosotros</title>
</head>
<body>
    <!--Inicio header de la pagina-->
    <header class="header-formulario">
        <!--Inicio menu-->
        <div class="menu container">
            <a href="index.php" class="logo">TecNopolis</a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="imagenes/menu.png" class="menu-icono" alt="menu">
            </label>
            <nav class="navbar">
                <ul>
                    <li><a href="index.php">Inicio</a></li>
                    <li><a href="Formulario.php">Contactanos</a></li>
                </ul>
            </nav>
                    <a href="LoginYRegistro.php" class="btn-1">Login</a>
        </div>
    <!--Fin menu-->        
     </header>
    <!--Fin del header de la pagina-->

    <!--Inicio descripcion-->
    <section class="movies container">
        <h2>Informacion de la pagina web</h2>
        <hr>
        <div class="box-container-1">
            <!--Inicio primera pelicula-->
            <div class="box-1">
                <div class="content">
                    <h3>Nosotros</h3>
                    <br>
                    <p> Proyecto creado por: Rodrigo Macias Ruiz (21131531) y dios. </p>
                    <p> Proyecto unidad 1: Proyecto de pagina web. </p>
                    <p> Fecha de entrega: 6/12/2023. </p>
                    <p> Materia: Programacion web 13:00 hrs </p>
                    <p> Docente: Ana Lilia Urbina Amador </p>
                </div>
            </div>
    </section>
    <!--Fin descripcion-->

    <!--Inicio footer-->
    <footer class="footer container">
        <h3>TecNopolis</h3>
        <br>
        <ul>
           <li><a href="index.php">Inicio</a></li>
           <li><a href="Formulario.php">Contactanos</a></li>
        </ul>
       </footer>
    <!--Fin footer-->
                                                    
                                               
<SCRIPT LANGUAGE="JavaScript">
<!-- Begin
var no = 50;
var speed = 1;
var ns4up = (document.layers) ? 1 : 0;
var ie4up = (document.all) ? 1 : 0;
var s, x, y, sn, cs;
var a, r, cx, cy;
var i, doc_width = 800, doc_height = 600;
if (ns4up) {
doc_width = self.innerWidth;
doc_height = self.innerHeight;
}
else
if (ie4up) {
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
x = new Array();
y = new Array();
r = new Array();
cx = new Array();
cy = new Array();
s = 8;
for (i = 0; i < no; ++ i) {
initRain();
if (ns4up) {
if (i == 0) {
document.write("<layer name=\"dot"+ i +"\" left=\"1\" ");
document.write("top=\"1\" visibility=\"show\"><font color=\"blue\">");
document.write(",</font></layer>");
}
else {
document.write("<layer name=\"dot"+ i +"\" left=\"1\" ");
document.write("top=\"1\" visibility=\"show\"><font color=\"blue\">");
document.write(",</font></layer>");
   }
}
else
if (ie4up) {
if (i == 0) {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write("visible; TOP: 15px; LEFT: 15px;\"><font color=\"blue\">");
document.write(",</font></div>");
}
else {
document.write("<div id=\"dot"+ i +"\" style=\"POSITION: ");
document.write("absolute; Z-INDEX: "+ i +"; VISIBILITY: ");
document.write("visible; TOP: 15px; LEFT: 15px;\"><font color=\"blue\">");
document.write(",</font></div>");
      }
   }
}
function initRain() {
a = 6;
r[i] = 1;
sn = Math.sin(a);
cs = Math.cos(a);
cx[i] = Math.random() * doc_width + 1;
cy[i] = Math.random() * doc_height + 1;
x[i] = r[i] * sn + cx[i];
y[i] = cy[i];
}
function makeRain() {
r[i] = 1;
cx[i] = Math.random() * doc_width + 1;
cy[i] = 1;
x[i] = r[i] * sn + cx[i];
y[i] = r[i] * cs + cy[i];
}
function updateRain() {
r[i] += s;
x[i] = r[i] * sn + cx[i];
y[i] = r[i] * cs + cy[i];
}
function raindropNS() {
for (i = 0; i < no; ++ i) {
updateRain();
if ((x[i] <= 1) || (x[i] >= (doc_width - 20)) || (y[i] >= (doc_height - 20))) {
makeRain();
doc_width = self.innerWidth;
doc_height = self.innerHeight;
}
document.layers["dot"+i].top = y[i];
document.layers["dot"+i].left = x[i];
}
setTimeout("raindropNS()", speed);
}
function raindropIE() {
for (i = 0; i < no; ++ i) {
updateRain();
if ((x[i] <= 1) || (x[i] >= (doc_width - 20)) || (y[i] >= (doc_height - 20))) {
makeRain();
doc_width = document.body.clientWidth;
doc_height = document.body.clientHeight;
}
document.all["dot"+i].style.pixelTop = y[i];
document.all["dot"+i].style.pixelLeft = x[i];
}
setTimeout("raindropIE()", speed);
}
if (ns4up) {
raindropNS();
}
else
if (ie4up) {
raindropIE();
}
//  End -->
</script>
<style>
html {
    height: 100%;
}

body {
    background: #0D343A;
    background: -webkit-gradient(linear,0% 0%,0% 100%, from(rgba(13,52,58,1) ), to(#000000) );
    background: -moz-linear-gradient(top, rgba(13,52,58,1) 0%, rgba(0,0,0,1) 100%);
    overflow: hidden;
}


.drop {
    background: -webkit-gradient(linear,0% 0%,0% 100%, from(rgba(13,52,58,1) ), to(rgba(255,255,255,0.6)) );
    background: -moz-linear-gradient(top, rgba(13,52,58,1) 0%, rgba(255,255,255,.6) 100%);
    width: 1px;
    height: 89px;
    position: absolute;
    bottom: 200px;
    -webkit-animation: fall .63s linear infinite;
    -moz-animation: fall .63s linear infinite;
}

/* animate the drops*/
@-webkit-keyframes fall {
to {
    margin-top: 900px;
}
}

@-moz-keyframes fall {
to {
    margin-top: 900px;
}
}

.vertical-center {
    margin: 100px auto;
    color: #fff;
    top: 50%;
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    text-align: center
}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

<section class="rain">
  <h1 class="vertical-center">
    
  </h1>
</section>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script>
// number of drops created.
var nbDrop = 858;

// function to generate a random number range.
function randRange(minNum, maxNum) {
    return (Math.floor(Math.random() * (maxNum - minNum + 1)) + minNum);
}

// function to generate drops
function createRain() {

    for (i = 1; i < nbDrop; i++) {
        var dropLeft = randRange(0, 1600);
        var dropTop = randRange(-1000, 1400);

        $('.rain').append('<div class="drop" id="drop' + i + '"></div>');
        $('#drop' + i).css('left', dropLeft);
        $('#drop' + i).css('top', dropTop);
    }

}
// Make it rain
createRain();
</script><a target='_blank' href='https://www.javascriptfreecode.com' style='font-size: 8pt; text-decoration: none'></a>                                                
                                            
</body>
</html>