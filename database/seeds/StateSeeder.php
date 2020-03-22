<?php

use Illuminate\Database\Seeder;
use App\Macroregion;
use App\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen("database/seeds/states.csv", "r");
        while (($input = fgetcsv($csvFile)) !== false){
            DB::table('states')->insert([
                'macroregion_id' => $input[0],
                'code' => $input[1],
                'name' => $input[2]
            ]);
        }
    }
}
