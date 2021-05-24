<?php

namespace App\Imports;

use App\product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new product([
            'name' => $row[1],
            'categorie_id' => $row[2],
            'brand_id' => $row[3],
            'harga' => $row[4],
            'stok' => $row[5],
        ]);
    }
}
