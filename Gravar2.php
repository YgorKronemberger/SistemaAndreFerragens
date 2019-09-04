<?php 
    
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $senha = $_POST['senha'];
    $repeteSenha = $_POST['repeteSenha'];
    
    /*
    echo $nome . "<br>";
    echo $email . "<br>";
    echo $celular . "<br>";
    echo $senha . "<br>";
    echo $repeteSenha . "<br>";
    */


    //------------------Cadastro---------------\\
    
    if ($none =! "" && $email != "" && $senha!= "" && $repeteSenha != "" && $senha == $repeteSenha){


       include "conect.php";

       $sql = "INSERT INTO usuarios VALUES(null, '{$nome}', '{$email}', '{$celular}', " . "SHA1('" . $senha . "')" . ")";

        mysqli_query($con, $sql);
        
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndre/administrador.php'>";
        

    }else{
        
        echo "<script>alert('Complete os campos vazios')</script>";
        echo "<meta http-equiv='refresh' content='0.2; http://localhost/SistemaAndre/administrador.php'>";
        
    }


    //--------------------------------------\\
    
        




?>