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
        $product = new App\Product([
            'imagePath'=>'http://3.bp.blogspot.com/-3REl1dnP4Xs/VJLZohkS0mI/AAAAAAAAEIU/M0Bb4r6XLOs/s1600/laravel-logo.jpg',
            'title'=>'Laravel',
            'description'=>'Superhero!',
            'price'=>1000
        ]);//


    }
}
