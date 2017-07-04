<?php

Class HTML
{
    Static Function a($href,$content,$optional=array())
    { 
        $opt =null;
        foreach ($optional as $key => $val) {
            $opt.="$key='$val'";
        }
        return "<a href='$href'$opt>$content</a>";        
    }
    Static Function br($lenght=1)
    {
        $x=0;
        $br = null;
        while ($x< $lenght)
        {
            $br.="<br>\n";
            $x++;
        }
        return $br;
    }
    
    Static Function open_div($attributes = array())
    {   $att=null;
        foreach($attributes as $key => $val)
        {
            $att.= "$key='$val'";
        }
        return "<div $att>\n";
    }
    
    Static Function close_div()
    {
        return "\n</div>\n";
    }
    
    Static Function open_form($attributes= array())
    {
        $attr = null;
        foreach ($attributes as $key => $val)
        {
            $attr .= "$key='$val'";
        }
        return "<form $attr >\n";
    }
    Static Function close_form()
    {
        return "</form>\n";
    }
    
    Static Function input($type,$name,$value=null,$attributes=array())
    {
        $attr = NULL;
        foreach ($attributes as $key => $val)
        {
            $attr.="$key='$val'";
            
        }
       
        return "<input type='$type' name='$name' value='$value'$attr >\n";
    }
    Static Function label($for,$content,$attributes=array())
    {
        $attr=NULL;
        foreach($attributes as $key => $val)
        {
            $attr .="$key='$val'";
        }
        return "<label for='$for'$attr>$content</label>\n";
    }
    Static Function button_HTML5($type,$content,$attributes=array())
    {
        $attr = NULL;
        foreach($attributes as $key => $val)
        {
            $attr .="$key='$val'";
        }
        return "<button type='$type'$attr>$content</button>\n";
    }
    Static Function radio($name,$value,$content,$checked=false,$attributes=array())
    {   
        $attr = NULL;
        foreach($attributes as $key => $val)
        {
            $attr .="$key='$val'";
        }
        if ($checked == true)
        {
            $checked='checked';
        }
        else
        {
            $checked=NULL;
        }
        return "<input type='radio' name='$name' value='$value'$checked $attr>$content";
    }
     Static Function checkbox($name,$value,$content,$checked=false,$attributes=array())
    {   
        $attr = NULL;
        foreach($attributes as $key => $val)
        {
            $attr .="$key='$val'";
        }
        if ($checked == true)
        {
            $checked='checked';
        }
        else
        {
            $checked=NULL;
        }
        return "<input type='checkbox' name='$name' value='$value'$checked $attr>$content";
    }
}
