<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;
    protected $table = 'identities';

    protected $fillable = [
        'fullname',
        'nickname',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'nationality',
        'region',
        'last_education',
        'major',
        'school',
        'value',
        'last_address'
    ];
}
