<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravel\Scout\Searchable;

class Post extends Model
{
    //
    protected $fillable = [
        'title',
        'body',
        'user_id',
        'category_id',
        'photo_id',
        'slug',
        'tags',
        'status',
        'meta_title',
        'meta_description',
        'view_count'
    ];

    use Sluggable;
    use Searchable;




    public function toSearchableArray()
    {
        $array = $this->toArray();

        // Customize array...

        return $array;
    }



    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function photo(){

        return $this->belongsTo('App\Photo');
    }

}
