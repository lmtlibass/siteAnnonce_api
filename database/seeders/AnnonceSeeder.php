<?php

namespace Database\Seeders;

use App\Models\Annonce;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AnnonceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Annonce::create([
            'titre' => 'Telephone portable',
            'description' => 'techno phantome9 ram 6gb, memoire 128gb',
            'image' => 'https://s1.qwant.com/thumbr/474x474/1/7/ea1b3080455bd0ead16c39c487e90b57bd0f965cf1af55f4546c228eb0b33c/th.jpg?u=https%3A%2F%2Ftse2.mm.bing.net%2Fth%3Fid%3DOIP.5yggPdr_Q_iW4Y4ky9oLHwHaHa%26pid%3DApi&q=0&b=1&p=0&a=0',
            'telephone' => '77-121-11-11',
            'prix' => 122000,
            'categorie_id' => 1,
        ]);
        Annonce::create([
            'titre' => 'polo',
            'description' => 'polo qualité standar prix moyen',
            'image' => 'https://s1.qwant.com/thumbr/474x234/3/7/a0a9475fa886750e91a69139a623aaa6ec66f849dd54f36b0ef3ef85f519b3/th.jpg?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.SmS5e8gPkqFWEwB2EWqQRQHaDq%26pid%3DApi&q=0&b=1&p=0&a=0',
            'telephone' => '77-129-10-11',
            'prix' => 3000,
            'categorie_id' => 2,
        ]);
    }
}
