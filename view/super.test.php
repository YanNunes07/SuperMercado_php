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
    <title>Mercado do porto</title>
</head>

<body>

    <header>
        <nav class="menu">

            <div class="nav-wrapper">
                <a href="../index.php" class="brand-logo">Mercado do Porto</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="#">Produtos</a></li>
                    <li><a href="./super.test.php">Pagamento</a></li>
                    <li><i class="material-icons">add_shopping_cart</i></li>

                </ul>

            </div>
            <p style="padding-left: 35%;">Produtos destinados a maiores de 18 anos. | Frete Grátis Sudeste em pedidos acima de R$2500</p>

        </nav>
    </header>
    <section class="conteudo">
        <div class="container2">
            <h5 style="padding-left: 32%;">No momento estamos com pouco estoque</h5>
            <div class="row">
                <form class="col s12" action="./super.resposta.php" method="get">
                    <div class="row 10">
                        <div class="input-field col s12">
                            <p>Digite seu nome: </p>
                            <input placeholder="Nome:" name="txtnome" type="text" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu telefone: </p>
                            <input placeholder="telefone:" name="txtfone" type="number" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu email: </p>
                            <input placeholder="email:" name="txtemail" type="email" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Digite seu endereço de entrega: </p>
                            <input placeholder="endereco:" name="txtendereco" type="text" class="validate">

                        </div>

                        <div class="input-field col s12">
                            <p>Digite sua idade: </p>
                            <input placeholder="idade:" name="txtidade" type="number" class="validate">

                        </div>
                        <select class="browser-default" name="txtcategoria">
                            <option value="ceu" disabled selected>categoria </option>
                            <option value="vinho">Vinho </option>
                            <option value="whisky">Whisky </option>

                        </select>
                        <label>Selecione sua bebida</label>
                        <select class="browser-default" name="txtbebida">
                            <option value="ceu" disabled selected>Rotulo </option>
                            <option value="Macallan">Macallan 18 anos R$5.800,00 </option>
                            <option value="Buchanan">Buchanan's 18 anos R$ 979,99 </option>
                            <option value="Dalmore">Dalmore 18 Anos R$ R$ 1.773,90 </option>
                            <option value="Chateau">Vinho Château Pavie Premier R$ 6.900,00 </option>
                            <option value="caro">Vinho Caro Cosecha R$ 780,00 </option>

                        </select>

                        <div class="input-field col s12">
                            <p>Digite a quantidade:</p>
                            <input placeholder="Quantidade:" name="txtquant" type="number" class="validate">

                        </div>
                        <label>Forma de pagamento</label>
                        <select class="browser-default" name="txtpagamento">
                            <option value="ceu" disabled selected>Pagamento </option>
                            <option value="credito">Cartao de credito </option>
                            <option value="pix">pix </option>
                            <option value="Boleto">Boleto bancario </option>
                        </select>
                        <div class="input-field col s12">
                            <p>Possui algum cupom de desconto:</p>
                            <input placeholder="Cupom:" name="txtcupom" type="number" class="validate">

                        </div>
                        <div class="input-field col s12">
                            <p>Frete Grátis em pedidos acima de R$1000,00:</p>
                            <p>Informe seu cep:</p>

                            <input placeholder="CEP:" name="txtcep" type="number" class="validate">

                        </div>




                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit" name="action">Enviar
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>


        </div>


        </div>

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