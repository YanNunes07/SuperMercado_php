<?php

class Mercado
{

    private $nomeCliente;
    private $telefoneCliente;
    private $enderecoEntrega;
    private $nomeProduto;
    private $valor;
    private $quantidade;
    private $categoria;
    private $pagamento;
    private $email;
    private $idade;





    function __construct()
    {
    }

    function __destruct()
    {
    }


    public function getNomeCliente()
    {
        return $this->nomeCliente;
    }

    public function setNomeCliente($nomeCliente)
    {
        $this->nomeCliente = $nomeCliente;
    }

    public function getTelefoneCliente()
    {
        return $this->telefoneCliente;
    }

    public function setTelefoneCliente($telefoneCliente)
    {
        $this->telefoneCliente = $telefoneCliente;
    }

    public function getEnderecoEntrega()
    {
        return $this->enderecoEntrega;
    }

    public function setEnderecoEntrega($enderecoEntrega)
    {
        $this->enderecoEntrega = $enderecoEntrega;
    }

    public function getNomeProduto()
    {
        return $this->nomeProduto;
    }

    public function setNomeProduto($nomeProduto)
    {
        $this->nomeProduto = $nomeProduto;
    }

    public function getValor()
    {
        return $this->valor;
    }

    public function setValor($valor)
    {
        $this->valor = $valor;
    }

    public function getQuantidade()
    {
        return $this->quantidade;
    }

    public function setQuantidade($quantidade)
    {
        $this->quantidade = $quantidade;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    public function getPagamento()
    {
        return $this->pagamento;
    }

    public function setPagamento($pagamento)
    {
        $this->pagamento = $pagamento;
    }

    public function getEntrega()
    {
        return $this->entrega;
    }

    public function setEntrega($entrega)
    {
        $this->entrega = $entrega;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getIdade()
    {
        return $this->idade;
    }


    public function setIdade($idade)
    {
        $this->idade = $idade;
    }


    public function mostrarHora()
    {
        return date("d-M-Y");
    }

    function tipoProduto()
    {
        switch ($this->categoria) {
            case $this->categoria == 'vinho':
                return "Vinho";
                break;
            case $this->categoria == 'whisky':
                return "Whisky";
                break;
            default:
                return "categoria invalida";
        }
    }
    function getProduto()
    {
        switch ($this->nomeProduto) {
            case $this->nomeProduto = "Macallan":
                return "Macallan 18 anos R$5.800,00";
                break;
            case $this->nomeProduto = "Buchanan":
                return "Buchanan's 18 anos R$ 979,99";
                break;
            case $this->nomeProduto = "Dalmore":
                return "Dalmore 18 Anos R$ R$ 1.773,90";
                break;
            case $this->nomeProduto = "Chateau":
                return "Vinho Château Pavie Premier R$ 6.900,00";
                break;
            case $this->nomeProduto = "caro":
                return "Vinho Caro Cosecha R$ 780,00";
                break;
            default:
                return "plano invalido";
                break;
        }
    }

    function formaPagamento()
    {

        switch ($this->pagamento) {
            case $this->pagamento == "Cartao de credito":
                return "Cartao de credito";
                break;
            case $this->pagamento == "pix":
                return "pix";
                break;
            case $this->pagamento == "Boleto bancario":
                return "Boleto bancario";
                break;

            default:
                return "pagamento invalido";
                break;
        }
    }

    function cupomDesconto()
    {
        $numeros = range(1, 100);
        $letras = range("A", "Z");

        shuffle($numeros);
        shuffle($letras);

        echo  "Cupom de desconto gerado: <strong>" . $letras[0] . "" . $numeros[0] . $letras[1] . "" . $numeros[1] . $letras[2] . "" . $numeros[2]."</strong>";
    }

    function valorCupom()
    {
        return $this->cupomDesconto() == ($this->ValorTotal() / 10);
    }


    function ValorTotal()
    {

        switch ($this->nomeProduto) {
            case $this->nomeProduto = "Macallan":
                return 5.800 * $this->quantidade;
                break;
            case $this->nomeProduto = "Buchanan":
                return 979.99 * $this->quantidade;
                break;
            case $this->nomeProduto = "Dalmore":
                return 1.773 * $this->quantidade;
                break;
            case $this->nomeProduto = "Chateau":
                return 6.900 * $this->quantidade;
                break;
            case $this->nomeProduto = "caro":
                return 780.00 * $this->quantidade;
                break;
            default:
                return "plano invalido";
                break;
        }
    }
    function frete()
    {
        if ($this->ValorTotal() <= 1000) {
            return +20;
        } else if ($this->ValorTotal() > 1000) {
            return 0;
        }
    }
    function ValorTotalFrete() {
        return $this->ValorTotal() + $this->frete();
    }
    

    function __toString()
    {
        return nl2br(
            "
                    Data e hora da emissao da nota: {$this->mostrarHora()}
                     Nome:  {$this->nomeCliente}
                     Telefone: {$this->telefoneCliente}
                     Idade: {$this->idade}
                     Email: {$this->email}
                     Endereço de entrega: {$this->enderecoEntrega}
                     Categoria: {$this->tipoProduto()}
                     Produto: {$this->getProduto()}
                     Quantidade: {$this->quantidade}
                     Forma de pagamento: {$this->formaPagamento()}
                     Frete: {$this->frete()}R$
                     Valor total: R$ {$this->valorTotalFrete()}
                     Você ganhou um cupom de 10% para proxima compra
                     <br>"
        );
    }
}
