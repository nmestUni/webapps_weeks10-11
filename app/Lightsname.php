<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lightsname extends Model
{
    protected $table = 'lightsnames';

    public function location()
    {
        return $this->hasOne('App\Location', 'lightNameId');
    }

    protected $fillable = [
        'name',
        'address'
    ];
}
