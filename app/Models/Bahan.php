<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    //
    protected $table = "bahan";

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nama', 'kode'];

    public function resep()
    {
        return $this->belongsToMany('App\Models\Resep', 'bahan_resep');
    }
}
