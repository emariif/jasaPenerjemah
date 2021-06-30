<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailwork extends Model
{
    use HasFactory;
    public function job(){
        return $this->belongsTo('App\Models\Job','jobs','jobs_id');
    }

    public function proposal(){
        return $this->belongsTo('App\Models\Proposal');
    }

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function detailwork(){
        return $this->belongsTo('App\Models\Detailwork');
    }
}
