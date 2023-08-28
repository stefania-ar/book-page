<?php

class libros_model{

    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;' .'dbname=libros;charset=utf8' , 'root', '');
    }


    function insert($a, $b, $c, $f, $e, $g, $h, $i, $j){
        $this->$db;
        $sentencia=$this->db->prepare(" INSERT INTO libros(nombre, genero_principal, genero_sec, autor_ap, autor_nom, anio_publi, pais_origen,
        anio_leido, pais_set) VALUES (?,?,?,?,?,?,?,?,?)");
        if(null != ($_POST['nombreLibro'])){
            $sentencia-> execute(array($a, $b, $c, $f, $e, $g, $h, $i));
        }
        header("Location: ".BASE_URL."home");
    }

    function select(){
        $sentencia=$this->db->prepare(" SELECT * FROM libros");
        $sentencia-> execute();
        $libros=$sentencia-> fetchAll(PDO::FETCH_OBJ);
        return $libros;
    
    }

}