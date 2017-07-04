<?php

Class URL
{
    Static Function base_url()
    {
        If (isset($SERVER["HTTPS"]) && $_SERVER["HTTPS"] !="off")
        {
            $protocol="https";
        }
        else
        {
            $protocol="http";
        }
        $server_name = $_SERVER["SERVER_NAME"];
        $server_php_self = $_SERVER["PHP_SELF"];//formato::/framework/public/index.php
        $patch = explode("/",$server_php_self);
        
        
        //eliminamos del array index.php
        array_pop($patch);
        
        //comprobamos si estamos utilizando urls amigables
        if(in_array("mod_rewrite",apache_get_modules()))
        {     
            //eliminamos del array public
            array_pop($patch);    
            $patch = implode("/",$patch);
        }
        else
        {
            $patch = implode("/",$patch);
        }
        return $protocol."://".$server_name.$patch;
    }
    Static Function redirect($url)
    {
        header("location:$url");
    }
}