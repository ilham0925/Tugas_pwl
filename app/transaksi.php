<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table ="transaksi";
    protected $primaryKey ="id";
    protected $fillable = [
        'id','name','categorie_id','brand_id','harga' , 'stok','gambar','tglmasuk','kode_transaksi'];
    
    public function product()
    {
          return $this->hasMany(product::class);
    } 
}
