<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos.css">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Exercicios 02</title>
</head>

<body>

    <header>
        <nav class="menu">

            <div class="nav-wrapper">
                <a href="../index.php" class="brand-logo">Mercado do Porto</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../index.php">Produtos</a></li>
                    <li><a href="./super.teste.php">Pagamento</a></li>
                    <li><i class="material-icons">add_shopping_cart</i></li>

                </ul>

            </div>
            <p style="padding-left: 35%;">Produtos destinados a maiores de 18 anos. | Frete Grátis Sudeste em pedidos acima de R$1000,00</p>

        </nav>
    </header>
    <section class="conteudo">
        <div class="container2">
            <h5 style="padding-left: 42%;">Total da venda</h5>
            
              <?php
              
              include "../model/super.class.php";

              $sup = new Mercado;
             
              echo "<p>Nome:".$_GET["txtnome"]."</p>";
              echo "<p>Telefone:".$_GET["txtnome"]."</p>";
              echo "<p>Idade:" .$_GET["txtidade"]."</p>";
              echo "<p>Email:" .$_GET["txtemail"]."</p>";
              echo "<p>Endereço de entrega:" .$_GET["txtendereco"]."</p>";
              echo "<p> Quantidade:" .$_GET["txtquant"]."</p>";
              echo "<p>Forma de pagamento:" .$_GET["txtpagamento"]."</p>";
              echo "<p>Cupom para proxima compra:" .$_GET["txtcupom"]."</p>";
              echo "<p>Valor total R$:" ."</p>";
          
              
          
              
              ?>
        </div>
    </section>
    <footer class="page-footer" style="background-color: rgb(15, 15, 15) ">
        <div class="container1">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Mercado do Porto</h5>
                    <p class="grey-text text-lighten-4">O melhor para você sem sair de casa.</p>
                </div>
                <div class="col l4 offset-l2 s12">
                    <h5 class="white-text">Links</h5>
                    <ul>
                        <li><a class="grey-text text-lighten-3" href="">@mercadodoporto@gmail.com</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">(51)98765-4321</a></li>
                        <li><a class="grey-text text-lighten-3" href="#!">@MercadoDoPorto</a></li>
                        <li><a class="grey-text text-lighten-3">Mercado do porto</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
        <div class="footer-copyright" style="background-color: rgb(26, 3, 3);">
            <div class="container">
                © 2014 Copyright Text
                <a class="grey-text text-lighten-4 right" href="#!">More Links</a>
                </< /div>
            </div>
    </footer>
    <script type="text/javascript" src="js/materialize.min.js"></script>

</body>

</html>