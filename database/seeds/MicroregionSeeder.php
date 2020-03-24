<?php

use Illuminate\Database\Seeder;
use App\State;
use App\Mesoregion;
use App\Microregion;

class MicroregionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen("database/seeds/microregions.csv", "r");
        while (($input = fgetcsv($csvFile)) !== false){
            $state = State::where('code', $input[0])->first();
            $meso = $state->mesoregions()->where('code', $input[1])->get()->first();
            $micro = new Microregion;
            $micro['mesoregion_id'] = $meso->id;
            $micro['code'] = $input[2];
            $micro['name'] = $input[3];
            $micro->save();
        }
    }
}
