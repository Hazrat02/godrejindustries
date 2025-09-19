<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class platform extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',

    ];

    public function network()
    {
        return $this->hasMany(payment::class, 'user_id'); // Ensure 'user_id' is the foreign key
    }

}
