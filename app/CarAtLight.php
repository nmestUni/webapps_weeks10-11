<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarAtLight extends Model
{
    protected $table = 'caratlights';

    public function car()
    {
        return $this->belongsTo('App\Car', 'carId')->withDefault();
    }

    public function lightName()
    {
        return $this->belongsTo('App\Lightsname', 'lightNameId')->withDefault();
    }

    public function fineType()
    {
        return $this->belongsTo('App\FineType', 'fineTypesId')->withDefault();
    }

    protected $fillable = [
        'carId',
        'lightNameId',
        'fineTypesId'
    ];
}
