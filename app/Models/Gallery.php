<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use CrudTrait;
    use HasFactory;

    // Explicitly set the table name (in case you want to keep it as "galleries")
    protected $table = 'galleries';

    // Mass assignable fields
    protected $fillable = [
        'image',
        'title',
        'description',
    ];
}
