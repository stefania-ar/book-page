<?php
require_once('libs/smarty/Smarty.class.php');

Class view_libros{

    function __construct(){
        $this->smarty = new Smarty();
    }

    function show($libros){
        
        //$smarty->assign('titulo',”Libros”);
        $this->smarty->assign('libros', $libros);

        $this->smarty->display('templates/showbooks.tpl');
    }

    function showHome(){
        $this->smarty->display('templates/home.tpl');
    }
}
    
    