<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table = 'states';
    protected $primaryKey = 'id';
    protected $fillable = ['macroregion_id', 'code', 'name'];

    public function macroregion(){
        return $this->belongsTo('\App\Macroregion');
    }

    public function mesoregions(){
        return $this->hasMany('\App\Mesoregion');
    }

    public function microregions(){
        //depois de implementar Mesoregions::microregions(),
        //fazer um for pra retornar todas as micros juntas.
        //o resultado é uma lista?
        //Isso seria moleza em Python, ou se eu soubesse PHP. kkkk
       
        //return $this->mesoregions()->microregions();
    }
}

