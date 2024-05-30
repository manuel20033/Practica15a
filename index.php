<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>IntroPhp7 Grupo X__</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header><br><br>
    </header>
<section id="contenedor">
<section  class="problema">
<h2>Problema: Cálcular la Velocidad de escape</h2>
        <p>Descripción:</p>
        <p>El radio del sol es de 696*10^6(6.96*10^8)m y su masa es de 1.989*10^30kg<br>
</section>
<section class="formulas">
<h2>Fórmulas</h2>
        Vescape = √(2*G*M)/R<br>
</section>
<section class="datos">
<h2>Datos:</h2>
        G = 6.67430*10^-11 m^3kg^-1s^-1; <br>
        M = 1.989*10^30 kg; <br>
        R = 6.963*10^8m; <br>
</section>
<section class="calculos">
<h2>Solución</h2>
        <p>a)La Velocidad de escape es:<br>
         <br>
        Vescape= √2*6.674*10^-11*1.989*10^30/(6.963*10^8) km/s</p>
</section>
<?php
function calcula_velocidadE() {
    $G = 6.6740e-11; 
    $M = 1.989e30;
    $R = 6.963e8;

    $velocidadEscape = sqrt(2 * $G * $M / $R);
    $velocidadEscapeKmS = $velocidadEscape / 1000;

    return $velocidadEscapeKmS . ' km/s';
}

?>

<section class="resultado">
<h2>Resultado:</h2>
<div id="resultadoA"></div>
<?php
 print "<h1> resultado: velocidad de escape = ".calcula_velocidadE();
?>
</section>
</section>
    <footer class="pie">
     Creative Commons versión 3.0 SciSoft 2024
    </footer>
   </section>
</body>
</html>
