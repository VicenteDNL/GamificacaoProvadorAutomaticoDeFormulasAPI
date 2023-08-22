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
        $this->call(UsuarioSeeder::class);
        // $this->call(NiveisMvflpSeeder::class);
        // $this->call(RecompensaSeeder::class);
        // $this->call(ExercicioMvflpSeeder::class);
    }
}
