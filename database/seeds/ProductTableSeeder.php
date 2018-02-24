<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            $product = new \App\Product([
        'imagePath'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f2/Limes.jpg/339px-Limes.jpg',    
            'title' => 'Oranges',
            'description'=>' Super sweet and healthy with fub current sweet and juicy hairs',
            'price'=>20000
            ]);
            $product->save();




            $product = new \App\Product([
                'imagePath'=>'https://i.pinimg.com/736x/24/96/7d/24967ddddca268b019c298a6c46f2b7a--exotic-fruit-tropical-fruits.jpg',    
                'title' => 'Lack zills',
                'description'=>' Super sweet and healthy with fub current sweet nice fro the body ',
                'price'=>30000
                ]);
                $product->save();


             $product = new \App\Product([
                'imagePath'=>'https://chikas.co.uk/betaversion/wp-content/uploads/2017/02/avocado-1304027_640-1.jpg',    
                 'title' => 'Ovacado',
                 'description'=>' Super sweet and healthy with fub current sweet and juicy hairs',
                 'price'=>40000
                 ]);
                 $product->save();


             $product = new \App\Product([
                'imagePath'=>'http://wwwchem.uwimona.edu.jm/gifs/carambola.jpg',    
                  'title' => 'Jamaican Fruit',
                  'description'=>' Super sweet and healthy with fub current sweet and juicy hairs',
                   'price'=>70000
                 ]);
                $product->save();


              $product = new \App\Product([
                 'imagePath'=>'https://i1.wp.com/www.amyland.uk/wp-content/uploads/2016/04/78a4729602fd55755008db9003c288fb.jpg?fit=400%2C560',    
                  'title' => 'Egg Plants',
                   'description'=>' Super sweet and healthy with fub current sweet and juicy hairs',
                    'price'=>30000
                     ]);
                     $product->save();

                $product = new \App\Product([
                    'imagePath'=>'http://www.naturallivingideas.com/wp-content/uploads/2016/04/Cape-gooseberry.jpg',    
                     'title' => 'Dallas Fruits',
                     'description'=>' Super sweet and healthy with fub current sweet and juicy hairs',
                     'price'=>10000
                     ]);
                     $product->save();
    }
}
