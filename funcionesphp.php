<?php


function conexionBase(){
    return $db = new PDO('mysql:host=localhost;' .'dbname=general;charset=utf8' , 'root', '');
}

function insert(){
    $db= conexionBase();
    $sentencia=$db->prepare(" INSERT INTO libros(nombre, genero_principal, genero_sec, autor_a, anio_publi, pais_origen,
    anio_leido) VALUES (?,?,?,?,?,?,?)");
    if(null != ($_POST['nombreLibro'])){
        $sentencia-> execute(array($_POST['nombreLibro'],$_POST['generoPrin'],$_POST['generoSec'],$_POST['autor_a'],$_POST['anio_publi'],
        $_POST['PaisOrigen'],$_POST['anio_leido']));
    }
    header("Location: ".BASE_URL."home");
}

function select(){
    $db= conexionBase();
    $sentencia=$db->prepare(" SELECT FROM libros (nombre, genero_principal, genero_sec, autor_a, anio_publi, pais_origen,
    anio_leido)");
    $libros=$sentencia-> execute();
    return $libros;

}