<table>
    <thead>
        <tr>
            <th>titulo</th>
            <th>Genero Principal</th>
            <th>Gen Secundario</th>
            <th>Apellido autor</th>
            <th>Nombre autor</th>
            <th>Año publicacion</th>
            <th>Año leido</th>
            <th>Pais Origen</th>
            <th>Pais historia</th>
        </tr>
    </thead>
    <tbody>
    {foreach $libros as $pelicula} 
        <tr>
                <td>{$pelicula->nombre}</td>
                <td>{$pelicula->genero_principal}</td>
                <td>{$pelicula->genero_sec}</td>
                <td>{$pelicula->autor_ap}</td>
                <td>{$pelicula->autor_nom}</td>
                <td>{$pelicula->anio_publi}</td>
                <td>{$pelicula->anio_leido}</td>
                <td>{$pelicula->pais_origen}</td>
                <td>{$pelicula->pais_set}</td>
        </tr>
    {/foreach}
    </tbody>    
</table>