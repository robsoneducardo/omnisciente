<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Macroregion extends Model
{
    protected $table = 'macroregions';
    protected $primaryKey = 'id';
    //acho que os timestamps são dispensáveis.
    public $timestamps = true;
    protected $fillable = ['name', 'code'];

    public function states(){
        return $this->hasMany('\App\State');
    }
}

