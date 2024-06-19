<?php

// namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Person extends Model
// {
//     use HasFactory;
// }

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
  use HasFactory;
  use SoftDeletes;
  protected $fillable = ['name', 'age'];
}
