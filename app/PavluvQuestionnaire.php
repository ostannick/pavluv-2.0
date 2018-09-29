<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PavluvQuestionnaire extends Model
{
    protected $fillable = [
      'question',
      'required',
    ];

}
