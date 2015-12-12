<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = "resep";

    protected $fillable = ['nama', 'kode', 'koki_id'];

    public function koki()
    {
        return $this->belongsTo('App\Models\Koki', 'koki_id', 'id');
    }
}
