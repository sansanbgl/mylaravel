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
    protected function getRelationshipFromMethod($method)
    {
        $models = parent::getRelationshipFromMethod($method);

        !is_null($models) ?: $models = $this->$method()->newQuery()->getModel();

        return $this->relations[$method] = $models;
    }
    protected $fillable = ['nama', 'kode'];

    public function resep()
    {
        return $this->hasMany('App\Models\Resep', 'koki_id', 'id');
    }
}
