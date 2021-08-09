<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public static function fetchProducts()
    {
        $products = [
            'product 1' => [
                'name' => 'jacket',
                'price' => '620',
                'img' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=676&q=80',
                'desc' => 'A Jacket'
            ],
            'product 2' => [
                'name' => 'Jeans',
                'price' => '320',
                'img' => 'https://images.unsplash.com/photo-1542272604-787c3835535d?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=926&q=80',
                'desc' => 'Blue Jeans'
            ],
            'product 3' => [
                'name' => 'Shirt',
                'price' => '150',
                'img' => 'https://images.unsplash.com/photo-1598032895397-b9472444bf93?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=800&q=80',
                'desc' => 'Blue Jeans'
            ],
            'product 4' => [
                'name' => 'Dress',
                'price' => '320',
                'img' => 'https://images.unsplash.com/flagged/photo-1585052201332-b8c0ce30972f?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=675&q=80',
                'desc' => 'Blue Jeans'
            ],
            'product 5' => [
                'name' => 'Boots',
                'price' => '320',
                'img' => 'https://images.unsplash.com/photo-1605733160314-4fc7dac4bb16?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1368&q=80',
                'desc' => 'Blue Jeans'
            ],
            'product 6' => [
                'name' => 'Hat',
                'price' => '320',
                'img' => 'https://images.unsplash.com/photo-1556306535-0f09a537f0a3?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1050&q=80',
                'desc' => 'Blue Jeans'
            ]
            
        ];

        return $products;
    }
}
