<?php

Class ROUTER
{       
    Static Function show_view($view , $model = null)
    {   
        if( is_array($model))
        {
            extract($model);
        }
        
        $route = explode("/",$_GET["r"]);
        $controller = $route[0];
        $controller = ucfirst($controller)."Controller";
        $app = new $controller;
        $layout = $app -> layout;
        
        $content =  "../app/Views/$view.php";
        include "../app/Views/$layout.php";
        
    }
    
    /* redirecciona mediante una url por ejemplo 
      <a href="<?php echo ROUTER::create_action_url("demo/login", array('id'=>1)); ?>"> Ir a login</a>*/
    
    Static Function create_action_url($r , $parameters=null)
    {   
        if (in_array("mod_rewrite",apache_get_modules()))
        {
            $p = null;
            $config = new Config();
            $rule = $config->rules[$r];
            $r = $rule["?r=$r"];
            if(is_array($parameters))
            {   
                foreach ($parameters as $param => $value)
                {
                   $p .="/$param/$value";
                           
                }
            }
            return URL::base_url()."/".$r."".$p."";
        }
        else 
        {
            $p = null;
            if (is_array($parameters))
            {
                foreach ($parameters as $param => $value)
                {
                    $p.="&$param=$value";
                }
            }
            return URL::base_url()."/index.php?r=".$r."".$p."";
        }
     }
   
    
    //despues de una accion redirecciona a otro lado por ejemplo 
    /*<?php  ROUTER::redirect_to_action("demo/login", array('id'=>1))?>*/
    Static Function redirect_to_action($r , $parameters=null)
    {    
         if (in_array("mod_rewrite", apache_get_modules()))
        {
            $p = null;
            $config = new Config();
            $rule = $config->rules[$r];
            $r = $rule["?r=$r"];
            if (is_array($parameters))
            {
                foreach ($parameters as $param => $value)
                {
                   $p .= "/$param/$value"; 
                }
            }
            return header("location: ".URL::base_url()."/".$r."".$p."");
        }
        else
        {
            $p = null;
            if (is_array($parameters))
            {
                foreach($parameters as $param => $value)
                {
                    $p .= "&$param=$value";
                }
            }
            header("location: ".URL::base_url()."/index.php?r=".$r."".$p."");
        }
    }
    /* combina dos vistas <?php ROUTER::load_view("demo/login") ?>*/
    Static Function load_view($v)
    {
        include "../app/Views/$v.php";
    }
    
}
