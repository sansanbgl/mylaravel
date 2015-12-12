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
    protected function getRelationshipFromMethod($method)
    {
        $models = parent::getRelationshipFromMethod($method);

        !is_null($models) ?: $models = $this->$method()->newQuery()->getModel();

        return $this->relations[$method] = $models;
    }
    protected $fillable = ['nama', 'kode'];

    public function resep()
    {
        return $this->belongsToMany('App\Models\Resep', 'bahan_resep', 'resep_id', 'bahan_id');
    }
}
