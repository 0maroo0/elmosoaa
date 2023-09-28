<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class chapter extends Model
{
    use HasFactory;
    protected $table = 'chapter'; // If the table name is not 'levels'.

    protected $fillable = [

    ];
}
