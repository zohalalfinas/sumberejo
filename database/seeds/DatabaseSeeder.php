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
        $this->call(Grafik::class);
        $this->call(Profil::class);
        $this->call(user::class);

    }
}
