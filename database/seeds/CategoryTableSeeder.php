<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
         DB::table('categories')->insert([
            'name' => 'Bogota',
            'slug' => 'Noticias-Bogota',
            'description' => 'Noticias de Bogota',
        ]);

         DB::table('categories')->insert([
            'name' => 'Mundo',
            'slug' => 'Noticias-Mundo',
            'description' => 'Noticias del Mundo',
        ]); 

    DB::table('categories')->insert([
            'name' => 'Colombia',
            'slug' => 'Noticias-Colombia',
            'description' => 'Noticias de Colombia',
        ]); 

      DB::table('categories')->insert([
            'name' => 'Deporte',
            'slug' => 'Noticias-Deporte',
            'description' => 'Noticias de Deporte',
        ]);


       DB::table('categories')->insert([
            'name' => 'Economia',
            'slug' => 'Noticias-Economia',
            'description' => 'Noticias de Economia',
        ]);

        DB::table('categories')->insert([
            'name' => 'Entretenimiento',
            'slug' => 'Noticias-Entretenimiento',
            'description' => 'Noticias de Entretenimiento',
        ]);

           DB::table('categories')->insert([
            'name' => 'Opinion',
            'slug' => 'Noticias-Opinion',
            'description' => 'Noticias de Opinion',
        ]);

          DB::table('categories')->insert([
            'name' => 'Politica',
            'slug' => 'Noticias-Politica',
            'description' => 'Noticias de Politica',
        ]);    

    }
}
  