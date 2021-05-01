<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class brand extends Model
{
    protected $table ="brand";
    protected $primarykey = "id";
    protected $fillable = ['id','brand','description'];

    public function brand()
    {
        return $this->hasMany(brand::class);
    }
}
