<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puppy extends Model
{
    protected $guarded = [
      'pavluv_price',
      'pavluv_keeps',
    ];
}
