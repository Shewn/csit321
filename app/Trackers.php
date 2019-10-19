<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trackers extends Model
{
    protected $table = 'trackers';

    public $primaryKey = 'trackId';

    public $timestamps = true;  

    public function arts()
    {
        return $this->belongsTo('App\Arts','trackId','Tracker_ID');
    }
}
