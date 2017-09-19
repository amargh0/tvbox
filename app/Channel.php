<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $table = 'channel';
    protected $primaryKey ="id";
    public $incrementing = false;
    public $timestamps = false ;
    protected $with=['gh'];

    protected $fillable = [
        'channelname',
        'ulchannel',
        'id',
        'section',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
    function gh(){
        return $this->belongsTo(Section::class,"section","id");
    }
}


