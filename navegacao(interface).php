<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/navegacao.css">
    <link rel="stylesheet" href="css/cadastro.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Administrador - Lista Prod.</title>
    <style>
        /*-------------Responsividade ---------*/

        @media screen and (min-width:992px) and (max-width:1199px) {
            #caixaLog{
                width: 17% !important;
            }
        }
        @media screen and (min-width:768px) and (max-width:991px){
            #caixaLog{
                width:38%;
            }
            #Log{
                display:inline;
                padding: 2% 6%;
                text-align:center;
                
            }
            #Cad{
                display:inline;
                padding: 2% 3%;
                text-align:center;
            }
          
            
        }

        #Log{
            margin-bottom:0.5%;
            padding: 5% 21%; 
            margin-left:0; 
            display:block;
        }
        #Cad{
            margin-bottom: 0.5%;
            padding: 6% 8%;    
            margin-top: 9%; 
            margin-left:0; 
            display:block;
        }

        

    
    
    
    </style>
</head>

<body>
   

        <header id="cabecalho" >
            <div class="container">
            
              <div id="Logo">
               
                <a href="">Logo</a> <span id="nome" style="display:inline;"> Ferragens André Medeiros</span>
                
                 <div id="caixaLog" style="display:inline-block;" >
                     <div id="caixaLog2">
                            <a href="" id="Log"   class="botao " data-toggle="modal" data-target="#modalExemploLog" ><i class="fa fa-user" aria-hidden="true"></i> Entrar</a>
                            <a href="" id="Cad"  class="botao" data-toggle="modal" data-target="#modalExemploCad"><i class="fa fa-user-plus" aria-hidden="true"></i> Cadastar</a>
                        </div>
                    </div>
                

               
                </div>

                 
            
        <div id="GeralNav">


            <nav id="Navegacao">

                <div id="NavBord">

                    <img style="float:left;" src="img/parafuso.png" alt="">

                <img class="divisor" style="margin-left:1%" src="img/divisao.png" alt="">
                    <a style="margin-left:0;" href="Início.php"> <i class="fa fa-home" aria-hidden="true"></i> Inicio</a>
                    
                    <a href="Orçamentos.php"><i class="fa fa-cart-plus" aria-hidden="true"></i> Orçamento</a>
                  
                    <a href="Produtos.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Produtos</a>  
                    
                    <img class="divisor"  style="margin-left:1%" src="img/divisao.png" alt="">
                
                   
                
                
                <img style="float:right;" src="img/parafuso.png" alt="">
                
            
            </div>

                


                
            </nav>

               
            </div>
           
 

            
        </div>
        </header>
        
    
    <!-- --------------- CADASTRO -------------- -->
        
        
        
    <div class="modal fade" id="modalExemploCad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="background-color:#dcdcdc00; border: none;">
     

    <div class="row corpo" >

        <div class="formulario"> <!-- Formulario -->
            
         <form class="segunda" action="Gravar2.php" method="post"><!-- segunda camada -->

            <div><img style="float:left;" src="img/parafuso.png" alt=""> <img style="float:right;" src="img/parafuso.png" alt=""></div>
            
            <h3 class="titulo">Cadastro</h3>

            <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu"> 

            <div class="form-group"> <input autofocus name="nome" class="form-control" type="text" placeholder="Nome de usuário *"> </div> <!-- Nome -->

            <div class="form-group"> <input name="email" class="form-control" type="email" placeholder="E-mail *"> </div> <!-- email -->

            <div class="form-group"> <input maxlength="11" name="celular" class="form-control" type="text" placeholder="Celular"> </div> <!-- celular -->

            <div class="form-group"> <input id="senha" name="senha" class="form-control" type="password" placeholder="Senha *"> </div> <!-- Senha -->

            <div class="form-group"> <input id="repeteSenha" name="repeteSenha" class="form-control" type="password" placeholder="Repita sua senha *"> </div> <!--Repetir Senha-->

            <img class ="divisao img-fluid" src="img/divisorVert.png" alt="Divisor de Menu">


            <input class="botao" type="submit" value="Cadastrar"> <!-- Botão -->
            
            
            <img style="float:left; margin-top:5%;" src="img/parafuso.png" alt=""> <img style="margin-top:5%; float:right;" src="img/parafuso.png" alt=""> <!-- Botões -->
            
            </form> <!-- segunda camada -->

        </div> <!-- Formulario -->

        

    </div>
</div>
</div>
</div>


<!-- --------------- CADASTRO -------------- -->









    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>