<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    protected $table = "resep";

    protected $fillable = ['nama', 'kode', 'koki_id'];
    protected function getRelationshipFromMethod($method)
    {
        $models = parent::getRelationshipFromMethod($method);

        !is_null($models) ?: $models = $this->$method()->newQuery()->getModel();

        return $this->relations[$method] = $models;
    }

    public function koki()
    {
        return $this->belongsTo('App\Models\Koki', 'koki_id', 'id');
    }

    public function bahan()
    {
        return $this->belongsToMany('App\Models\Bahan', 'bahan_resep', 'bahan_id', 'resep_id');
    }
}
