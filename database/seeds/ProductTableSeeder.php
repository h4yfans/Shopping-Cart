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
            'imagePath'   => 'https://goo.gl/B3SsWW',
            'title'       => 'Harry Potter',
            'description' => 'Super cool - at least as a child',
            'price'       => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/M/MV5BMjM5OTQ1MTY5Nl5BMl5BanBnXkFtZTgwMjM3NzMxODE@._V1_SY1000_CR0,0,674,1000_AL_.jpg',
            'title'       => 'Game of Thrones ',
            'description' => 'While a civil war brews between several noble families in Westeros, the children of the former rulers of the land attempt to rise to power.',
            'price'       => 16
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://images-na.ssl-images-amazon.com/images/I/81IFSec8vSL.jpg',
            'title'       => 'Game of Thrones: A Song of Ice and Fire',
            'description' => 'Winter is coming. Such is the stern motto of House Stark, the northernmost of the fiefdoms that owe allegiance to King Robert Baratheon in far-off King’s Landing. There Eddard Stark of Winterfell rules in Robert’s name. ',
            'price'       => 22
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://upload.wikimedia.org/wikipedia/en/d/dc/A_Song_of_Ice_and_Fire_book_collection_box_set_cover.jpg',
            'title'       => 'Game of Thrones: A Feast for Crows',
            'description' => 'Martin\'s inspirations included the Wars of the Roses and the French historical novels The Accursed Kings by Maurice Druon.[2][3] A Song of Ice and Fire received praise for its diverse portrayal of women and religion, as well as its realism. ',
            'price'       => 10
        ]);

        $product->save();

        $product = new \App\Product([
            'imagePath'   => 'https://upload.wikimedia.org/wikipedia/en/5/5d/A_Dance_With_Dragons_US.jpg',
            'title'       => 'Game of Thrones: A Song of Ice and Fire',
            'description' => 'Would-be king Stannis Baratheon and his forces occupy the Wall as Jon Snow, the newly elected 998th Lord Commander of the Night\'s Watch, sends Samwell Tarly to the Citadel in Oldtown to be trained as a Maester. Sam is accompanied by the ancient Maester Aemon, the wildling girl Gilly, and the wildling leader Mance Rayder\'s newborn son, whom Jon has switched with Gilly\'s baby to save the wildling "prince" from sacrifice by Stannis\' Red priestess Melisandre. ',
            'price'       => 10
        ]);

        $product->save();
    }
}
