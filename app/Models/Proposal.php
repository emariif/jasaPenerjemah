<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table ='proposals';
    protected $fillable =['jobs_id','users_id','deskripsi'];

    public function users(){
        return $this->belongsTo('App\Models\User');
    }

    public function job(){
        return $this->belongsTo('App\Models\Job');
    }

}
