<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Arts extends Model
{
    //
    protected $table = 'arts';

    public $primaryKey = 'Accession_number';

    public $timestamps = true;  

    public function trackers()
    {
        return $this->hasOne('App\Trackers','trackId','Tracker_ID');
    }    

}
