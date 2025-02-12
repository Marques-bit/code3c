<?php

$quantidade = readline ("As maçãs estão custando R$ 1.30 cada uma, mas comprando 12un ou mais, voce recebe um desconto de R$ 0.30 quantas gostaria de levar? ");
if ($quantidade >= 12){
    $total = $quantidade * 1.00;
    echo "O valor da compra ficara em: R$ " . $total;
    echo "\n";
}else {
    $total = $quantidade * 1.30;
    echo "O valor da compra ficara em: R$ " . $total;
    echo "\n";
}

?>