<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Img extends Model
{
    protected $table = 'images';

    public $timestamps = false;

    protected $fillable = [
    	'id',
        'full_img_path',
        'thumb_img_path',
    ];

    public function notes()
    {
        return $this->belongsToMany('App\Note', 'data_note');
    }
}
