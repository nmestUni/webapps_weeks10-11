<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FineType extends Model
{
    protected $table = 'finetypes';

    protected $fillable = [
        'fineName'
    ];
}
