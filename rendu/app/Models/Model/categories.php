<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;

    protected $table = 'categories';

    public function receipt()
    {
        return $this->hasMany('app\Models\Model\products', 'products_id', 'id');
    }

}
