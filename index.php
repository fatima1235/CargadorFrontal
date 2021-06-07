<?php
    include('User.Controller.php');
    include('Inventario.Controller.php');

     if(isset($_GET['class'])&& isset($_GET['method']))
     {
        $class=$_GET['class'];
        $method=$_GET['method'];
     }
     else
     {
        echo "Primera Carga";
     }
     echo $class."---".$method."<br/>";

     $c = new $class();
     $c->$method();
?>