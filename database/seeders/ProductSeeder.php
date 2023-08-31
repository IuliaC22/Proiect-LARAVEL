<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['name' => 'Casuta de papusi din lemn',
                'description' => 'Culoare:multicolorContine 16 piese',
                'image' => 'https://bit.ly/3QEF4xj',
                'price' => 750
            ],
            [
                'name' => 'Lego Disney Princess-Castelul de Gheata',
                'description' => 'Numarul piselor din cutie:709 ',
                'image' => 'https://bit.ly/3GZvwKd',
                'price' => 1000
            ],
            [
                'name' => 'Locomotiva metalica Thomas',
                'description' => 'Culoare: Albastru',
                'image' => 'https://bit.ly/3kcCdzG',
                'price' => 40
            ],
            [
                'name' => 'Elicopter militar',
                'description' => '1x elicopter militar lumini si sunet',
                'image' => 'https://bit.ly/3Zyg8vH',
                'price' => 70
            ],
            [
                'name' => 'Figurina Mickey Mouse,Pluto in masinuta',
                'description' => 'Setul contine:1 x figurina Pluto; 1 x masinuta',
                'image' => 'https://bit.ly/3w2UhPk',
                'price' => 50
            ],
            [
                'name' => 'Masinuta cu telecomanda ',
                'description' => 'Culoare:Rosie',
                'image' => 'https://bit.ly/3XwW6Qv',
                'price' => 50
            ],
            [
                'name' => 'Jucarie de plus,Urs multicolor',
                'description' => 'Dimenisune:30cm',
                'image' => 'https://bit.ly/3H2wOnE',
                'price' => 70
            ],
            [
                'name' => 'Jucarie de plus Scooby Doo',
                'description' => 'Culoare:maro',
                'image' => 'https://bit.ly/3QGQSPJ',
                'price' => 100
            ],
            [
                'name' => 'Papusa Baby Maia Deluxe',
                'description' => 'Dimenisiune:42 cm',
                'image' => 'https://bit.ly/3GLANUC',
                'price' => 70
            ],
            [
                'name' => 'Lego Super Mario',
                'description' => 'Numar piese:494',
                'image' => 'https://bit.ly/3QAHgWT',
                'price' => 370
            ],

        ];

        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}
