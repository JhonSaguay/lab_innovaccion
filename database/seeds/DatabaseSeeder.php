<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             EstadoRegistroSeeder::class,
             ProvinciaSeeder::class,
             CantonSeeder::class,
             TipoInstitucionSeeder::class,
             IniciativaOrigenSeeder::class,
             TipoPoblacionSeeder::class,
             OdsCategoriasSeeder::class,
         ]);
    }
}