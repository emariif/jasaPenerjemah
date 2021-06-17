<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori_Bahasa extends Model
{
    use HasFactory;
    protected $table ='kategori_bahasa';

    public function job()
    {
        // return $this->belongsTo(Job::class,'kategori_bahasa_id');
        // return $this->hasMany(Job::class,'kategori_bahasa_id');
        return $this->hasMany('App\Models\Job');

    }
    
    // public function job(){
    //     return $this ->belongsTo('App\job','id');
        
    // }
    /**
     * Get the user that owns the bahasa
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    
}
