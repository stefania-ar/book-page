<?php

Class view_libros{

    function __construct(){

    }
    function show($peliculas){
       $html = "<table>
                <thead>
                    <tr>
                        <th>titulo</th>
                        <th>Genero Principal</th>
                        <th>Gen Secundario</th>
                        <th>Director_a</th>
                        <th>Calificacion</th>
                        <th>Genero</th>
                    </tr>
                </thead>
            <tbody>";
            foreach ($peliculas as $pelicula) {
                $html.=   "<tr>
                                <td>$pelicula->nombre</td>
                                <td>$pelicula->genero_principal</td>
                                <td>$pelicula->genero_sec</td>
                                <td>$pelicula->autor_a</td>
                                <td>$pelicula->anio_publi</td>
                                <td>$pelicula->anio_leido</td>
                                <td>$pelicula->pais_origen</td>
                          </tr>";
                }
               $html.="</tbody>    
            </table>";
            echo $html;
    }
}
    
    