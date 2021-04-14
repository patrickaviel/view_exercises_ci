<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>You said:</p>
<?php   
    if(is_numeric($times)){
        for($i=0;$i<$times;$i++){   ?>
            <p><?= $word?></p>
<?php   }                           
    }else{                          ?>
        <p>Sorry. This url does not meet our requirement.</p>
<?php    } ?>
</body>
</html>