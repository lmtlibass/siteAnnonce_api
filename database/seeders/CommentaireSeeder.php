<?php

namespace Database\Seeders;

use App\Models\Commentaire;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Commentaire::create([
            'libelle' => 'ça coûte combien ?',
            'annonce_id' => 1,
        ]);
        Commentaire::create([
            'libelle' => 'je pregere les qualites superieur',
            'annonce_id' => 2,
        ]);
        
    }
}
