<?php

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $meta["title"] ?></title>
        <meta name="description" content="<?php echo $meta["description"] ?>">
        <meta name="keywords" content="<?php echo $meta["keywords"] ?>">
       
        <link rel="stylesheet" type="text/css" href="<?php echo URL::base_url()."/webroot/css/bootstrap.min.css" ?>">
        
        
        <script type="text/javascript" src="<?php echo URL::base_url()."/webroot/js/bootstrap.min.js" ?>"></script>
        
    </head>
    <body>
      
        <div class="container">
            <?php echo HTML::br(4) ?>
        <?php include $content; ?>
        </div>
    </body>
</html>
