<?php

require_once "./_View/view_libros.php";
require_once "./_Model/libros_model.php";


Class ControllerLibros{

    private $title;
    private $model;
    private $view;

    function __construct(){
       // $this->$title= "Libros";
        $this->model= new libros_model();
        $this->view= new view_libros();
    }
    function home (){
        $this->view->showHome();
        
     } 
                

    function insert(){
        $a=$_POST['nombreLibro'];
        $b=$_POST['generoPrin'];
        $c=$_POST['generoSec'];
        $d=$_POST['autor_ap'];
        $f=$_POST['autor_nom'];
        $e=$_POST['anio_publi'];
        $g=$_POST['PaisOrigen'];
        $h=$_POST['anio_leido'];
        $i=$_POST['PaisSet'];
        $this->model->insert($a, $b, $c, $d, $f, $e, $g, $h, $i);
    }


    function show(){
        $libros=$this->model->select();
        $this->view->show($libros);

        
    }


    function advancedSearch(){
        $titulo = $_POST['nombreLibroB'];
        $genero=$_POST['generoB'];
        $generoSec=$_POST['generoSecB'];
        $nombre = $_POST['nombreAutorB'];
        $apellido = $_POST['apellidoAutorB'];
        $anioPubli=$_POST['anioPubliB'];
        $paisEsc= $_POST['paisEscritoB'];
        $paisSeteado=$_POST['paisSeteadoB'];
        $anioLeido=$_POST['anioLeidoB'];

        $libros=$this->model->advancedSearch($titulo, $genero, $generoSec, $nombre, $apellido, $anioPubli
        $paisEsc, $paisSeteado, $anioLeido );
        $this->view->renderResults($libros);
    }
}


