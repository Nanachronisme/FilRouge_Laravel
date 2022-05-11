<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Section;
use Cviebrock\EloquentSluggable\Sluggable;

class Teacher extends Model
{
    use HasFactory, Sluggable;

    //protected $timestamps = false;

    //defines which data entries can be entered in the web application
    protected $fillable = [
        'slug',
        'teaFirstName',
        'teaName',
        'teaGender',
        'teaOrigin',
        'teaNickName',
        'section_id'
    ];
    
    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        //the method changes the default attribute to retrieve instances of Teacher in TeacherController,
        //it lets me pass slugs instead of ID and retrieve the associated teacher directly
        return 'slug';
    }


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

    /**
     * Returns the teacher's full name
     *
     * @return string
     */
    public function getFullName() : string
    {

        return $this->teaFirstName . ' ' . $this->teaName;
        
    }

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => ['teaFirstName', 'teaName']
                ]
            ];
    }

}
