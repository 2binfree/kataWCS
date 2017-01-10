<?php

namespace wcs;

class KataBasket
{
    public function action($lines)
    {
        $totalHT = 0;
        $totalDiscount = 0;
        $totalTVA5 = 0;
        $totalTVA20 = 0;
        $totalTTC = 0;

        foreach ($lines as $line) {
            $ht = $line['price_ht'] * $line['qty'];
            $discount = 0;
            if ($line['qty'] >= 10) {
                $discount = $ht * 0.1;
            } elseif ($line['qty'] >= 3) {
                $discount = $ht * 0.05;
            }
            $totalHT += ($ht - $discount);
            $totalDiscount += $discount;
            $tva5 = 0;
            $tva20 = 0;
            if ($line['code_tva'] == 1) {
                $tva5 = ($ht - $discount) * 0.05;
            } else {
                $tva20 = ($ht - $discount) * 0.2;
            }
            $totalTVA5 += $tva5;
            $totalTVA20 += $tva20;
            $totalTTC += ($ht + $tva5 + $tva20 - $discount);
        }

        return Array(
            'total_ht' => round($totalHT, 2),
            'total_discount' => round($totalDiscount, 2),
            'total_tva5' => round($totalTVA5, 2),
            'total_tva20' => round($totalTVA20, 2),
            'total_ttc' => round($totalTTC, 2),
        );
    }
}