<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    //protected $timestamps = false;

    //defines which data entries can be entered by forms
    protected $fillable = [
        'teaFirstName',
        'teaName',
        'teaGender',
        'teaOrigin',
        'teaNickName',
        'sections_id'
    ];

}
