<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Todo extends Model
{
  use HasFactory;
  use Searchable;

  protected $fillable = [
    'title',
    'content',
    'deadline',
    'isDone'
  ];
}
