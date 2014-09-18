<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="get">
            Name: <input type="text" name="name"><br>
             
            <input type="submit">
        </form>
        
        <?php
        
       
       
        
        
        
        
        $Array = array();
       
        $getter = $_GET["name"];
        
         
        array_unshift($Array, $getter);
        
        $minString = serialize($getter);
       
        
        
       
        
        
        setcookie("KakaN", $getter, time()+36000);
       
        
        
        
        echo $_COOKIE["KakaN"];
        
        
        
        
        
        
        
        
        ?>
    </body>
</html>
