<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Litter extends Model
{
    //Allows all fields to be mass assigned
    protected $guarded = [];

    public function sire()
    {
      return $this->belongsTo('App\Sire');
    }
    public function dam()
    {
      return $this->belongsTo('App\Dam');
    }
    public function puppies()
    {
      return $this->hasMany('App\Puppy');
    }

}
