<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mesoregion extends Model
{
    protected $table = 'mesoregions';
    protected $primaryKey = 'id';
    protected $fillable = ['state_id', 'code', 'name'];

    public function state(){
        return $this->belongsTo('\App\State');
    }

}
