<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $fillable = [
        'headline',
        'caption',
        'path',
        'pin'
    ];


    /**
     * Get the route key for the model.
     *
     * @return string
     */

    public function setPathAttribute($value)
    {
        return $this->attributes['path'] = DIRECTORY_SEPARATOR . 'photos' . DIRECTORY_SEPARATOR . $value;
    }

    public function getRouteKeyName()
    {
        return 'id';
    }
}
