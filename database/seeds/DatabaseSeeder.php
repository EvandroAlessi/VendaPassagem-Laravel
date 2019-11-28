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
        $this->call(DestinoSeeder::class);
        $this->call(AeronaveSeeder::class);
        $this->call(PassageiroSeeder::class);
        $this->call(VooSeeder::class);
        $this->call(PassageiroVooSeeder::class);
    }
}
