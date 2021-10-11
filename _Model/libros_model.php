<?php

class libros_model{

    private $db;

    function __construct(){
        $this->db=new PDO('mysql:host=localhost;' .'dbname=general;charset=utf8' , 'root', '');
    }


    function insert($a, $b, $c, $f, $e, $g, $h){
        $this->$db;
        $sentencia=$this->db->prepare(" INSERT INTO libros(nombre, genero_principal, genero_sec, autor_a, anio_publi, pais_origen,
        anio_leido) VALUES (?,?,?,?,?,?,?)");
        if(null != ($_POST['nombreLibro'])){
            $sentencia-> execute(array($a, $b, $c, $f, $e, $g, $h));
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