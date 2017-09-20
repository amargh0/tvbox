<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $table = 'section';
    protected $primaryKey = "id";
    public $incrementing = false;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'section',
    ];
    function channels(){
       return $this->hasMany(Channel::class,'id','section');
    }

}