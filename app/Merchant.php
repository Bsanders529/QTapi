<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
  protected $fillable = ['name','location','phone','email'];

  protected $hidden = ['ssn'];
}
