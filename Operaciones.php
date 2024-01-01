<?php


class Operaciones {
    private $montoEmisorToReceptor;
    private $saldoEmisor;

    public function __construct($saldoEmisorParam, $montoEmisorParam) {
        $this->saldoEmisor = $saldoEmisorParam;
        $this->montoEmisorToReceptor = $montoEmisorParam;
    }

    public function TransferirDineroOpe() {
        return $this->saldoEmisor - $this->montoEmisorToReceptor;
    }

    public function RetirarDineroOpe() {
        return $this->TransferirDinero();
    }

    public function DepositarDinero() {
        return $this->saldoEmisor + $this->montoEmisorToReceptor;
    }

    public function MontoOperacion(){
        return $this->montoEmisorToReceptor;
    }
}

?>