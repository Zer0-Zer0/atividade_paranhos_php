<?php
function fine_calc()
{
    extract($_POST);
    if (isset($send)) {
        $delta = $veiculo - $via;

        $multa =    $delta <= 10  ? 0   : ($delta <= 50  ? 100 : ($delta <= 100 ? 150 : 200));

        echo $multa == 0 ? "nenhuma multa a pagar" : "O motorista tem uma multa de R$$multa.00 para pagar";
    }
}
