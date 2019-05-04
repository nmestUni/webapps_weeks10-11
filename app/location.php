<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    protected $table = 'locations';

    public function lightName()
    {
        return $this->belongsTo('App\Lightsname');
    }

    protected $fillable = [
        'lightNameId',
        'coordinateX',
        'coordinateY'
    ];
}
