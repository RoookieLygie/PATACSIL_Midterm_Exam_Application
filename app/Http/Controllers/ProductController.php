<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $productMovie = [
            'genre' => ['Action', 'Science Fiction', 'Comedy','Horror','Crime Film'],
            'horror' => ['Smile','The Silence','Parasite',''],
            'children' => ['Willy Wonka','Chicken Run','Spirited Away','Matilda'],

            'other_movies' => ['Space Odyssey', 'Godfather', 'Raiders', 'The demon']
        ];

        return view('movie', compact('productMovie'));
    }
}
