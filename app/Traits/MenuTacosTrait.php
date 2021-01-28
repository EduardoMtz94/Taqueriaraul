<?php
namespace App\Traits;

trait MenuTacosTrait {
    public function getTacos()
    {
        $tacos = [
            [
                'img' => 'img/Productos/Taco-de-pastor.jpg',
                'name' => 'Taco de pastor',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Taco-de-bistec.jpg',
                'name' => 'Taco de bistec',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de suadero',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Taco-de-chorizo.jpg',
                'name' => 'Taco de chorizo',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de buche',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de h&iacute;gado',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de alambre',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/cabeza.jpg',
                'name' => 'Taco de cabeza',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de cuerno',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de trompa',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de ubre',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/quesadilla.jpg',
                'name' => 'Quesadillas',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Tripa-dorada.jpg',
                'name' => 'Taco de tripa dorada',
                'price' => '$15.00'
            ],
            [
                'img' => 'img/Productos/Tripa-blandita.jpg',
                'name' => 'Taco de tripa blandita',
                'price' => '$15.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de carnaza',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Taco de labio',
                'price' => '$11.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Sesos blanditos',
                'price' => '$15.00'
            ],
            [
                'img' => 'img/Productos/Varios.jpg',
                'name' => 'Sesos dorados',
                'price' => '$15.00'
            ],
            [
                'img' => 'img/Productos/Taco-de-lengua.jpg',
                'name' => 'Taco de lengua',
                'price' => '$22.00'
            ]
        ];
        return json_encode($tacos);
    }
}