<?php

namespace App;

use App\Litter;
use Illuminate\Database\Eloquent\Model;

class Kennel extends Model
{
    //Allows all fields to be mass assigned
    protected $guarded = [];

    public function sires()
    {
      return $this->hasMany('App\Sire');
    }
    public function dams()
    {
      return $this->hasMany('App\Dam');
    }
    public function litters()
    {
      return $this->hasMany('App\Litter');
    }
    public function unsavedLitters()
    {
      return Litter::where('kennel_id', $this->id)->where('saved', false)->get();
    }
}
