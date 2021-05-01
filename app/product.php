<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table ="product";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','name','categorie_id','brand_id','harga' , 'stok','gambar','tglmasuk','transaksi_id'];

    public function categorie()
    {
        return $this->belongsTo(categorie::class);
    }

    public function brand()
    {
        return $this->belongsTo(brand::class);
    }

    public function transaksi()
    {
        return $this->belongsTo(transaksi::class);
    }

}
