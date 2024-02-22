<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodbeverage()
    {
        return view('products')
            ->with('judul', 'Food and Beverage')
            ->with('products', [
                'Mie Instan Soto Mie Samyang',
                'Sosis Bakar Champ',
                'Nugget Ayam Quick Chicken',
                'Susu UHT Frisian Flag',
                'Teh Botol Sosro Teh Original',
            ]);
    }

    public function beautyhealth()
    {
        return view('products')
            ->with('judul', 'Beauty Health')
            ->with('products', [
                'Azarine Hydrasoothe Sunscreen Gel SPF 30++',
                'MAC Studio Fix Fluid Foundation',
                'Micellar Water Bioderma Sensibio H2O',
                'Moisturizer EGCG Green Tea Water Cream Innisfree',
                'Niacinamide 10% + Zinc 1% The Ordinary',
            ]);
    }

    public function homecare()
    {
        return view('products')
            ->with('judul', 'Homecare')
            ->with('products', [
                'Molto Ultra Sekali Bilas',
                'Downy Parfum Fabric Softener',
                'So Klin Softener',
                'Sunlight Extra Power',
                'Mama Lemon',
            ]);
    }

    public function babykid()
    {
        return view('products')
            ->with('judul', 'Baby Kid')
            ->with('products', [
                'Pampers',
                'MamyPoko',
                'Cap Lang',
                'Minyak Telon My Baby',
                'Minyak Telon Zwitsal',
            ]);
    }
}
