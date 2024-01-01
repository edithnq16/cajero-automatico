<?php
//depositar
//retiro
//transferencia
//consulta de saldo

require_once 'Operaciones.php';

class Cajero extends Operaciones {

    private $nombre;
    private $apellido;
    private $saldo;

    public function __construct($nombreParam, $apellidoParam, $saldoParam, $montoOperacion = 0) {
        parent:: __construct($saldoParam, $montoOperacion);
        $this->nombre = $nombreParam;
        $this->apellido = $apellidoParam;
        $this->saldo = $saldoParam;
    }

    public function ConsultaSaldo() {
        return $this->saldo;
    }
    public function obtenerNombreCompleto() {
        return $this->nombre ." " . $this->apellido;
    }
    
    public function RetirarDinero(){
        return parent::RetirarDineroOpe();
    }
    public function TransferirDinero(){
        return parent::TransferirDineroOpe();
    }

    public function DepositarDinero(){
        return parent::DepositarDinero();
    }
    public function MontoOperacion(){
        return parent::MontoOperacion();
    }




}



$operacion1 = new Cajero("Edith", "Navarro",1500);
$operacionRetirar = new Cajero("Edith", "Navarro",1500,500);
$operacionTransferencia = new Cajero("Edith", "Navarro",1000,500);
$operacionDeposito = new Cajero("Edith", "Navarro",500,5500);


echo "Hola " . $operacion1->obtenerNombreCompleto() . " su saldo es: " . $operacion1->ConsultaSaldo();

echo "<br> Hola, el retiro de " . $operacionRetirar-> MontoOperacion() ." se realizó satisfactoriamente y le queda un saldo de: " . $operacionRetirar-> RetirarDinero();

echo "<br> Hola, la transferencia de " . $operacionTransferencia-> MontoOperacion() ." se realizó satisfactoriamente y le queda un saldo de: " . $operacionTransferencia-> TransferirDinero();

echo "<br> Hola, el deposito de " . $operacionDeposito-> MontoOperacion() ." se realizó satisfactoriamente y tiene un saldo de: " . $operacionDeposito-> DepositarDinero();


?>