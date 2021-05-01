<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $table ="categorie";
    protected $primarykey = "id";
    protected $fillable = ['id','categorie','description'];

    public function product()
    {
        return $this->hasMany(product::class);
    }
}
