<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailwork extends Model
{
    use HasFactory;

    protected $table ='detailwork';
    protected $fillable =['jobs_id','users_id','status'];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function job(){
        return $this->belongsTo('App\Models\Job','jobs','jobs_id');
    }

    public function proposal(){
        return $this->belongsTo('App\Models\Proposal');
    }
}
