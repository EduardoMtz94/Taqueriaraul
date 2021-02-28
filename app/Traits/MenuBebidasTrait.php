<?php
namespace App\Traits;

trait MenuBebidasTrait {
    public function getBebidas()
    {
        $bebidas = [
            [
                'img' => 'img/Productos/Agua-jamaica.jpg',
                'name' => 'Agua de Jamaica',
                'firstOptionName' => 'Chica',
                'firstOptionPrice' => '$15.00',
                'secondOptionName' => '1 Litro',
                'secondOptionPrice' => '$22.00'
            ],
            [
                'img' => 'img/Productos/Refresco.jpg',
                'name' => 'Refresco',
                'firstOptionName' => 'Individual',
                'firstOptionPrice' => '$18.00',
                'secondOptionName' => 'Familiar',
                'secondOptionPrice' => '$30.00'
            ],
            [
                'img' => 'img/Productos/tepache-taqueria-raul.jpg',
                'name' => 'Tepache',
                'firstOptionName' => 'Individual',
                'firstOptionPrice' => '$15.00',
                'secondOptionName' => 'Familiar',
                'secondOptionPrice' => '$22.00'
            ]
        ];
        return json_encode($bebidas);
    }
}