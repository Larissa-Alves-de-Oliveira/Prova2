<?php
    if($tipo == 'entrada'){
        $sql = "select sum(valor) from fluxo_caixa where tipo = 'entrada'";
    }else if($tipo == 'Saida'){
        $sql = "select sum(valor) from fluxo_caixa where tipo = 'saida'";
    }else if($tipo == 'Saldo'){
        $sql = "select sum(case when tipo = 'Entrada' then valor else 0 end) - 
        sum(case when tipo = 'Saida' then valor else 0 end) as valor from fluxo_caixa";
    }
?>