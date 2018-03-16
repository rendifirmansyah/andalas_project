<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
	 public $table = "cruds";
	 protected $fillable = [ 'sampul' ];
}
