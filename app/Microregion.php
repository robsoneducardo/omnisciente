<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Microregion extends Model
{
    protected $table = 'microregions';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['name', 'code'];


    public function mesoregion(){
        return $this->belongsTo('App\Mesoregion');
    }
}
