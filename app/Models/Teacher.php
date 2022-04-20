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


    /**
     * Permits to filters for searches
     *
     * @param $query
     * @param array $filters
     * @return void
     */
    public function scopeFilter($query, array $filters)
    {
        /*
        if ($filters['search'] ?? false) //php 8 nullsafe operator, replace isset()
        {
            //equivalent to Post::newQuery()->filter()
            $query
                ->where('firstname', 'like', '%');
        }
        */

        //searching filters using queryBuilder when() function 
        $query->when($filters['search'] ?? false, function ($query, $search)
        {
            $query
                ->where('teaFirstName', 'like', '%' . $search . '%')
                ->orWhere('teaName', 'like', '%' . $search . '%')
                ->orWhere('teaNickName', 'like', '%' . $search . '%');
        });

    }

    public function section()
    {
        return $this->belongsTo(Section::class);
    }

}
