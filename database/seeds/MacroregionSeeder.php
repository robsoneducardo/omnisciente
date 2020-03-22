<?php

use Illuminate\Database\Seeder;


class MacroregionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csvFile = fopen("database/seeds/macroregions.csv", "r");
        while (($estado = fgetcsv($csvFile)) !== false){
            DB::table('macroregions')->insert([
                'code' => $estado[0],
                'name' => $estado[1]
            ]);
        }
    }
}
