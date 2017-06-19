<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'channel';
    protected $primaryKey ="channelname";
    public $incrementing = false;
    public $timestamps = false ;

    protected $fillable = [
        'channelname',
        'ulchnnel',
        'profile',

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}


