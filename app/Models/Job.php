<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $table ='jobs';
    protected $fillable =['nama_job','deskripsi','jumlah_halaman','durasi','total_harga','kategori_bahasa_id','users_id'];
    public $timestamps = false;

    /**
     * Get the user associated with the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    public function kategori_bahasa(){
    	// return $this->hasOne(Bahasa::class,'id');
        // return $this->belongsTo(Kategori_Bahasa::class,'id');
        return $this->belongsTo('App\Models\Kategori_Bahasa');
    }

    public function users(){
    	// return $this->hasOne(Bahasa::class,'id');
        // return $this->belongsTo(Kategori_Bahasa::class,'id');
        return $this->belongsTo('App\Models\User');
    }

    public function detailjob(){
    	// return $this->hasOne(Bahasa::class,'id');
        // return $this->belongsTo(Kategori_Bahasa::class,'id');
        return $this->hasOne('App\Models\Detailjob');
    }
}
