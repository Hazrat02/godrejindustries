<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class nominee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name',
        'email',
        'Phone',
        'id_font',
        'id_back',
        'postal',
        'address',
        'file',
        'city',
        'country',

        'created_at',

    ];

}
