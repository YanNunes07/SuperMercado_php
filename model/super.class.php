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
        if ($this->categoria == "vinho") {
            return "Vinho";
        } elseif ($this->categoria == "whisky") {
            return "Whisky";
        } else {
            return "tipo invalido";
        }
    }

    function frete()
    {
        if ($this->ValorTotal() <= 1000) {
            return "frete de R$ 20,00" + 20;
        } else if ($this->ValorTotal() > 1000) {
            return 0;
        }
    }

    function getProduto()
    {

        switch ($this->nomeProduto) {
            case "Macallan":
                return "Macallan 18 anos R$5.800,00 ";
                break;
            case "Buchanan":
                return "Buchanan's 18 anos R$ 979,99";
                break;
            case "Dalmore":
                return "Dalmore 18 Anos R$ R$ 1.773,90";
                break;
            case "Chateau":
                return "Vinho Château Pavie Premier R$ 6.900,00";
                break;
            case "caro":
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
            case "credito":
                return "Cartao de credito";
                break;
            case "pix":
                return "pix";
                break;
            case "Boleto":
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

        echo  "Código Gerado: " . $letras[0] . "" . $numeros[0] . $letras[1] . "" . $numeros[1] . $letras[2] . "" . $numeros[2];
    }

    function valorCupom()
    {
        return $this->cupomDesconto() == ($this->ValorTotal() / 10);
    }


    function ValorTotal()
    {

        switch ($this->nomeProduto) {
            case "Macallan":
                return "Macallan 18 anos R$:" . (5.800 * $this->quantidade) + ($this->frete());
                break;
            case "Buchanan":
                return "Buchanan's 18 anos R$:"(979.99 * $this->quantidade) + ($this->frete());
                break;
            case "Dalmore":
                return "Dalmore 18 Anos R$ R$: 1.773,90"(1.773, 90 * $this->quantidade) + ($this->frete());
                break;
            case "Chateau":
                return "Vinho Château Pavie Premier R$: 6.900,00"(6.900 * $this->quantidade) + ($this->frete());
                break;
            case "caro":
                return "Vinho Caro Cosecha R$: 780,00"(780.00 * $this->quantidade) + ($this->frete());
                break;
            default:
                return "plano invalido";
                break;
        }
    }

    function __toString()
    {
        nl2br(
            "Data e hora da emissao da nota: {$this->mostrarHora()}
                     Nome:  $this->nomeCliente
                     Telefone: $this->telefoneCliente
                     Idade: $this->idade
                     Email: $this->email
                     Endereço de entrega: $this->enderecoEntrega
                     Categoria: {$this->tipoProduto()}
                     Produto: {$this->getProduto()}
                     Quantidade: $this->quantidade
                     Forma de pagamento: {$this->formaPagamento()}
                     Frete: {$this->frete()}
                     Valor total: {$this->valorTotal()}
                     Você ganhou um cupom de 10% para proxima compra {$this->cupomDesconto()}
                     "
        );
    }
}
