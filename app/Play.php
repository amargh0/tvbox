<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Play extends Model
{
    protected $table = 'channel';
    protected $primaryKey ="id";
    public $incrementing = false;
    public $timestamps = false ;

    protected $fillable = [
        'channelname',
        'ulchnnel',
        'id',


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
