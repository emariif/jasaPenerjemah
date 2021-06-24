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
<<<<<<< HEAD
        return $this->belongsTo('App\Models\Job','jobs','jobs_id');
=======
        return $this->belongsTo('App\Models\Job');
>>>>>>> 2c439344a43ac0d039f63f17c868461d5580f0ba
    }

}
