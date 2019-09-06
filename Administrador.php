<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/adm.css">
    <link rel="stylesheet" href="css/navegacao.css">
    <link rel="stylesheet" href="css/Editar.css">
    <link rel="stylesheet" href="css/cadastro.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--BOOTSTRAP -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap.css.map">
    <link rel="stylesheet" href="css/min.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.css.map">
    <link rel="stylesheet" href="css/bootstrap-grid.min">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min">
    <link rel="stylesheet" href="css/bootstrap-reboot.css.map">
    <link rel="stylesheet" href="css/bootstrap-reboot.min">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css.map">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador - Lista Prod.</title>
    
    
    
    <style>
        

#camada1{
    border:solid 1px #fff !important;
    padding:3% !important;
      background: rgb(255,243,170) !important;
    background: radial-gradient(circle, rgba(255,243,170,1) 0%, rgba(255,230,111,1) 72%) !important;
    box-shadow: 1px 2px 4px 1.2px #000 !important;
}

#camada2{
    
    border:1px solid #fff;
    padding: 8%;
    background: rgb(255,243,170);
    background: radial-gradient(circle, rgba(255,243,170,1) 0%, rgba(255,230,111,1) 72%);
    box-shadow: 1px 2px 4px 1.2px #000 !important;
    text-align: center;
    
}
    
.form-control{
    
    margin-bottom: 2% !important;
    
            
}
        
#Adicionar{
    margin-top:2%;
    padding: 2%;
    font-weight: 400;
    color: #fff;
    background-color: #203864;
    border: #11264c 1px solid;
    box-shadow: 0.5px 0.5px 1px #404040;
    border-radius: 2.5px;
    transition: background-color 1s, border 1s;
    -moz-transition: background-color 1s, border 1s;
    -o-transition: background-color 1s, border 1s;
    -webkit-transition: background-color 1s, border 1s;
    margin-top:2%;
}

#Adicionar:hover{
    margin-top:2%;
    padding: 2%;
    font-weight: 400;
    color: #fff;
    background-color: #11264c;
    border: #203864 1px solid;
    box-shadow: 0.5px 0.5px 1px #404040;
    border-radius: 2.5px;
    transition: background-color 1s, border 1s;
    -moz-transition: background-color 1s, border 1s;
    -o-transition: background-color 1s, border 1s;
    -webkit-transition: background-color 1s, border 1s;
    text-align:center;
    margin-top:2%;
    
}

    #tituloInsert{
            
              color:rgb(0, 32, 96);
    text-shadow: 1px 1px 1px #000;
        }




  

        
    </style>
    
</head>
<body>
    <?php include "navegacao(interface).php";?>
    <div style="margin:0 auto;">
        
            
            


                <div class="container" style="margin-top:4%;">
                <img src="img/engrenagem.gif" width="80" alt="" style="float:left;    margin-top: -4%;">
                    <img src="img/engrenagem.gif" width="80" alt="" style="float:right;    margin-top: -4%;">
                 
                 
                 <h1 style="margin: 0 !important;text-align: center;color: rgb(0, 32, 96);text-shadow: 2px 2px 2px #c9c9c9;" class="titulo">Administrador</h1>

                 <hr>

                    
                    

                    

                    <table id="tabela" class="table table-bordered"  style="overflow:auto;!important">
                    <form action="buscar.php" method="Get">
                        <input id="pesquisa" type="text" placeholder="Buscar"> 
                        <i type="submit" class="fa fa-search btn btn-primary btn-sm" style="margin-left:1%;" aria-hidden="true">Buscar</i>    
                    </form>
                       
                    <button style="float:right;" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo"> Inserir Produto</button>
                        
                           <thead class="thead-dark">
                            <tr>
                            <th style="font-size:27px;" colspan="5">Lista de Produtos </th>
                            </tr>
                            <tr>
                            <th>#</th>
                            <th>Produto</th>
                            <th>Valor</th>
                            <th>Descrição</th>
                            <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody class="table-striped">

                            
                                <?php 
                                   
                                    include "conect.php";
                                    $sql = "SELECT * FROM produtos;";
                                    $busca = mysqli_query($con, $sql);


                              
                                    while($array = mysqli_fetch_array($busca)){
                                    
                                        $id_Prod = $array["id_Prod"];
                                        $nome_prod = $array["nome_prod"];
                                        $valor = $array["Valor"];
                                        $ProdDesc = $array["ProdDesc"];

                                
                                ?>
                                
                            <tr>
                                <td><?php echo $id_Prod; ?></td>
                                <td><?php echo $nome_prod; ?></td>
                                <td><?php echo $valor; ?></td>
                                <td><?php echo $ProdDesc; ?></td>
                                <td>
                                
                                <a class="btn btn-primary btn-sm" type="button" id="Editar" href="EditarProduto.php/?id=<?php echo $id_Prod; ?>&Produto=<?php echo $nome_prod; ?>&valor=<?php echo $valor; ?>"><i class="fa fa-pencil" aria-hidden="true"></i> Editar</a> 
                                
                                </td>
                            </tr>
                            

                                           
                            <?php }  ?>


                        
                        
                        </tbody>

                    </table>
                </div>

          
    
                </div>







<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
     
     
     <div id="camada1">
       
        <div id="camada2">
        <div>
                   <img src="img/parafuso.png" style="float:left" alt="">
                
                <img src="img/parafuso.png" style="float:right" alt="">
                </div>
        
        <h2 id="tituloInsert">Inserir Produto</h2>
        
        
       
            <form action="inserirProd.php" method="post">
                    
                    <img src="img/divisorVert.png" alt="">
                    
                <input name="InserNome" placeholder="Insira o nome do produto *" class="form-control" type="text">
                <input name="InserValor" placeholder="Insira o valor do produto * " class="form-control" type="text">
                <input name="InserDesc" placeholder="Insira a descrição do produto" class="form-control" type="text">
                  
                  <img src="img/divisorVert.png" alt="">

               
                
                
                <input type="submit" id="Adicionar">
                
                
                
                <img src="img/parafuso.png" style="float:left;margin-top:6%" alt="">
 
                <img src="img/parafuso.png" style="float:right; margin-top:6%" alt="">
                


            </form>
             
        </div>
        
    </div>
      
        
      
    </div>
  </div>
</div>





















</body>
</html>