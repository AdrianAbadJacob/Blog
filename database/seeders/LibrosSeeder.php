<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('libros')->insert([
            'titulo' => 'Primara Obra',
            'Descripcion' => 'La primera obra de nuestro autor',
            'Editorial' => 'Pinguino',
            'Publicacion' => '1993'
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Segunda Obra',
            'Descripcion' => 'La segunda obra de nuestro autor',
            'Editorial' => 'Pinguino',
            'Publicacion' => '1994'
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Tercera Obra',
            'Descripcion' => 'La tercera obra de nuestro autor',
            'Editorial' => 'Pinguino',
            'Publicacion' => '1995'
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Cuarta Obra',
            'Descripcion' => 'La cuarta obra de nuestro autor',
            'Editorial' => 'Pinguino',
            'Publicacion' => '1996'
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Quinta Obra',
            'Descripcion' => 'La quinta obra de nuestro autor',
            'Editorial' => 'Pinguino',
            'Publicacion' => '1997'
        ]);
        DB::table('libros')->insert([
            'titulo' => 'Sexta Obra',
            'Descripcion' => 'La sexta obra de nuestro autor',
            'Editorial' => 'Pinguino',
            'Publicacion' => '1998'
        ]);

        DB::table('users')->insert([
            'name' => 'administrador',
            'email' => 'administrador@gmail.com',
            'password' => '$2y$10$nrk2AiVfTkHHZrHpOGMHxuN4a51fAqbREUi98LADkl8ZJzr61PZSa'
        ]);

        
    }
}
