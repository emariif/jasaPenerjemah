<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detailjob extends Model
{
    use HasFactory;
    protected $table ='detail_job';
    protected $fillable =['job_id','pembayaran_id','pembayaran_id','mailbox_id'];

    public function job(){
        return $this->belongsTo('App\Models\Job');
    }

    public function users(){
        return $this->belongsTo('App\Models\User');
    }
}
