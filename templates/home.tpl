<!doctype html>
    <html lang="en">
        <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title> libros </title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        </head>
        <body>
            <main class="main">
                <form action="insert" method="post">
                    <input type="text" name="nombreLibro" placeholder="nombre libro">
                    <p>genero Principal</p> 
                    <select name="generoPrin" id="" >
                        <option value="No ficcion">No ficción</option>
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
                        <option value="Politica" >Politica</option>
                        <option value="Ficcion" selected>Ficción</option>
                        <option value="Aventura">Aventura</option>
                        <option value="Tragedia">Tragedia</option>
                        <option value="Suspenso">Suspenso</option>
                        <option value="Teatro">Teatro</option>
                        <option value="Poesía">Poesía</option>
                        <option value="Gauchesca">Gauchesca</option>
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
                        <option value="Aventura">Aventura</option>
                        <option value="Suspenso">Suspenso</option>
                        <option value="Teatro">Teatro</option>
                        <option value="Poesía">Poesía</option>
                        <option value="Gauchesca">Gauchesca</option>
                        <option value=""></option>
                    </select>
                    <input type="text" name="autor_nom" placeholder="NOMBRE">
                    <input type="text" name="autor_ap" placeholder="APELLIDO">
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
                        <option value="Irán">Irán</option>
                        <option value="Grecia">Grecia</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="España">España</option>
                    </select>
                    <select name="PaisSet" id="" >
                        <option value="Estados Unidos" >Estados Unidos</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Japon">Japon</option>
                        <option value="Croacia">Croacia</option>
                        <option value="Canada">Canada</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Australia">Australia</option>
                        <option value="Chile">Chile</option>
                        <option value="Inglaterra">Inglaterra</option>
                        <option value="Irán">Irán</option>
                        <option value="Grecia">Grecia</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="España">España</option>
                        <option value="" selected></option>
                    </select>
                    <input type="number" name="anio_leido" placeholder="AÑO LEIDO">
                    <input type="submit" value="Enviar">
                </form>
            </main>
        <button><a href="show">MOSTRAR LIBROS</a></button>
        </body>
    </html>