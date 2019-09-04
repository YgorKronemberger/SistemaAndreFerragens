<?php


        $InserNome = $_POST['InserNome'];
        $InserValor = $_POST['InserValor'];
        $InserDesc = $_POST['InserDesc'];

        if($InserNome != null or $InserValor != null or $InserDesc != null){
            


        include "conect.php";
        $query = "INSERT INTO produtos VALUES(null, '" . $InserNome . "', " . $InserValor . ", '" . $InserDesc .  "')";

        mysqli_query($con, $query);
            
            echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndre/Administrador.php'>";
        }else{
            
            
        echo "<script>alert('teste')</script>";
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndre/Administrador.php'>";
            
            
        }
        
    
    
    ?>