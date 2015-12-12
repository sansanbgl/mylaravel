<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Koki extends Model
{
    // //
    protected $table = "koki";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'kode'];

    public function resep(){
    	return $this->hasMany('App\Models\Resep', 'koki_id', 'id');
    }
}
