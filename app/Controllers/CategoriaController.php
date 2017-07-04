<?php

Class CategoriaController extends Controllers
{   
    Public $layout ="layouts/adminLayout";
    Public Function categoria()
    {   
           $meta = array
         (
             'title' =>'Pagina de inicio',
             'description'=> 'Es la descripcion de la pagina de inicio',
             'keywords'=> 'php, framework,mvc',
             'robots'=> 'All',
         );
         
        return ROUTER::show_view('categoria/categoria',array('meta'=>$meta));
    }
    
}

