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
        //print ("Inserindo tudo.\n");
        //$this->call(UsersTableSeeder::class);
        $this->call([MacroregionSeeder::class]);
        $this->call([StateSeeder::class]);
        $this->call([MesoregionSeeder::class]);
    }
}
