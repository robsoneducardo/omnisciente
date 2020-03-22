<?php

use Illuminate\Database\Seeder;
use App\Mesoregion;
use App\State;

class MesoregionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen("database/seeds/mesoregions.csv", "r");
        while (($input = fgetcsv($csvFile)) !== false){
            $state = State::where('code', $input[0])->first();
            $meso = new Mesoregion;
            $meso['state_id']=$state->id;
            $meso['code'] = $input[1];
            $meso['name'] =$input[2];
            $meso->save();
        }
    }
}
