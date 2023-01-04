<?php

$homePrices = ['100', '200', '300'];

function budgetHomes($homePrices)
{
  echo "Digite o orçamento inicial: ";
  fscanf(STDIN, "%s\n", $initBudget);

  echo "Digite o valor que gostaria de investir por casa. Temos casas de 100, 200 e 300: ";
  fscanf(STDIN, "%s\n", $homePriceSelected);

  while (!in_array($homePriceSelected, $homePrices)) {
    echo "Valor inválido. Temos casas de 100, 200 e 300: ";
    fscanf(STDIN, "%s\n", $homePriceSelected);
  }

  $maxHomes = intdiv($initBudget, $homePriceSelected);
  $totalSpend = $maxHomes * $homePriceSelected;

  $results = [
    'casas' => $maxHomes,
    'totalGasto' => $totalSpend,
    "orcamento" => $initBudget,
    'saldo' => $initBudget - $totalSpend,
  ];
  echo "\nQuantidade de casas: {$results['qte_casas']}\nValor investido: \${$results['total_gasto']}\nSaldo: \${$results['saldo']}\n";
}

budgetHomes($homePrices);
