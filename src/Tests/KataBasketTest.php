<?php

class KataExempleTest extends PHPUnit_Framework_TestCase
{
    public function test1 ()
    {
        $panier = array(
            array(
                'name' 	=> 'figurine maitre yoda',
                'price_ht'	=> 47.50,
                'code_tva'	=> 2,
                'qty'		=> 3
            ),
            array(
                'name' 	=> 'Chewing gum Choubaka',
                'price_ht'	=> 1.45,
                'code_tva'	=> 1,
                'qty'		=> 15
            ),
            array(
                'name' 	=> 'Taille crayon R2D2',
                'price_ht'	=> 7.80,
                'code_tva'	=> 2,
                'qty'		=> 2
            ),
            array(
                'name' 	=> 'Boules de pétanque BB-8 (x2)',
                'price_ht'	=> 34.80,
                'code_tva'	=> 2,
                'qty'		=> 3
            ),
        );
        $result = Array(
            'total_ht' => 269.73,
            'total_discount' => 14.52,
            'total_tva5' => 0.98,
            'total_tva20' => 50.03,
            'total_ttc' => 320.74,
        );
        $this->assertEquals($result, \wcs\KataExemple::action($panier));
    }
    public function test2 ()
    {
        $panier = array(
            array(
                'name'	=> 'Vaisseau mère empire lego',
                'price_ht'	=> 447.50,
                'code_tva'	=> 2,
                'qty'		=> 1
            ),
            array(
                'name' 	=> 'Costume 6PO',
                'price_ht'	=> 99.95,
                'code_tva'	=> 2,
                'qty'		=> 1
            ),
            array(
                'name' 	=> 'recharge distributeur bonbon pez Ewoks',
                'price_ht' => 1.15,
                'code_tva'	=> 1,
                'qty'		=> 20
            ),
            array(
                'name' 	=> 'Lampe de bureau étoile de la mort',
                'price_ht'	=> 52.25,
                'code_tva'	=> 2,
                'qty'		=> 3
            ),
        );
        $result = Array
        (
            'total_ht' => 717.06,
            'total_discount' => 10.14,
            'total_tva5' => 1.04,
            'total_tva20' => 139.27,
            'total_ttc' => 857.37,
        );

        $this->assertEquals($result, \wcs\KataExemple::action($panier));
    }

}