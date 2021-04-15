<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Receita;

use Illuminate\Database\Seeder;

class ReceitaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $receitas = Receita::factory(200)->create();

        foreach($receitas as $receita){
            Image::factory(1)->create([
                'imageable_id' =>$receita->id,
                'imageable_type'=> Receita::class

            ]);
            $receita->ingredientes()->attach([
                rand(1, 3),
                rand(5, 7)
            ]);
        }

       

    }
}
