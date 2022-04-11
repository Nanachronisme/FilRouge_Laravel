<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;

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
        'section_id'
    ];

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}
