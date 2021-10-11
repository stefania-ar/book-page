<?php
function home (){
    $title = "Libros";
 
?>


<!doctype html>
  <html lang="en">
    <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title><?php  echo $title ?></title>
    </head>
    <body>
    <form action="insert" method="post">
        <input type="text" name="nombreLibro" placeholder="nombre libro">
        <p>genero Principal</p> 
        <select name="generoPrin" id="" >
            <option value="Romance" >Romance</option>
            <option value="Thriller">Thriller</option>
            <option value="New Adult">New Adult</option>
            <option value="Terror">Terror</option>
            <option value="Contemporaneo">Contemporaneo</option>
            <option value="Fantasía">Fantasía</option>
            <option value="Misterio">Misterio</option>
            <option value="Historico">Historico</option>
            <option value="Young Adult">Young Adult</option>
            <option value="Mystery Thriller">Mystery Thriller</option>
            <option value="Memorias">Memorias</option>
            <option value="Ciencia-ficcion">Ciencia ficción</option>
            <option value="Politica">Politica</option>
            <option value="Ficcion">Ficción</option>
        </select>
        <select name="generoSec" id="" >
            <option value="Romance" >Romance</option>
            <option value="Thriller">Thriller</option>
            <option value="New Adult">New Adult</option>
            <option value="Terror">Terror</option>
            <option value="Contemporaneo">Contemporaneo</option>
            <option value="Fantasía">Fantasía</option>
            <option value="Misterio">Misterio</option>
            <option value="Historico">Historico</option>
            <option value="Young Adult">Young Adult</option>
            <option value="Mystery Thriller">Mystery Thriller</option>
            <option value="Memorias">Memorias</option>
            <option value="Politica">Politica</option>
            <option value="Ciencia-ficcion">Ciencia ficción</option>
            <option value="Ficcion">Ficción</option>
            <option value=""></option>
        </select>
        <input type="text" name="autor_a" placeholder="autor/a">
        <input type="number" name="anio_publi" placeholder="AÑO PUBLICACION LIBRO">
        <select name="PaisOrigen" id="" >
            <option value="Estados Unidos" >Estados Unidos</option>
            <option value="Argentina">Argentina</option>
            <option value="Japon">Japon</option>
            <option value="Croacia">Croacia</option>
            <option value="Canada">Canada</option>
            <option value="Nigeria">Nigeria</option>
            <option value="Australia">Australia</option>
            <option value="Chile">Chile</option>
            <option value="Inglaterra">Inglaterra</option>
        </select>
        <input type="number" name="anio_leido" placeholder="AÑO LEIDO">
        <input type="submit" value="Enviar">
    </form>


    </body>
  </html>
            
            <?php } ?>

