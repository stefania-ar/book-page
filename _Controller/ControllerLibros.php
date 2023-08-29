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
}


