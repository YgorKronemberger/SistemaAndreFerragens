<?php 

    $id = $_GET['id'];
    $Produto = $_GET['Produto'];
    $valor = $_GET['valor'];
    //$Desc = $_GET['DescProd'];

    
    
    
    
    
    echo $Produto . "<br>";
    echo $id . "<br>";
    echo $valor . "<br>";
    //echo $Desc . "<br>";

   include "conect.php";

    

?>