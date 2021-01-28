<?php
namespace App\Traits;

trait MenuPostresTrait {
    public function getPostres()
    {
        $postres = [
            [
                'img' => 'img/Productos/Flan-Napolitano.jpg',
                'name' => 'Flan Napolitano',
                'price' => '$30.00'
            ],
            [
                'img' => 'img/Productos/Jericalla.jpg',
                'name' => 'Jericalla',
                'price' => '$16.00'
            ]
        ];
        return json_encode($postres);
    }
}