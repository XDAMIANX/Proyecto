<?php

Class Controllers extends Config
{
    Public Function error()
    {   
          $meta = array
         (
             'title' =>'Page not found, error 404 ',
             'description'=> 'Page not found, error 404',
             'keywords'=> '',
             'robots'=> 'NOINDEX,NOFOLLOW',
         );
        return ROUTER::show_view("errors/error",array("meta"=> $meta));
    }
 
    
}
 

