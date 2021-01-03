<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function paniers()
    {
        return $this->belongsToMany('App\Models\Model\paniers', 'paniers_has_products');
    }

    public function receipt()
    {
        return $this->hasOne('app\Models\Model\categories', 'categories_id', 'id');
    }

    protected $fillable = [
        'categories',
        'name',
        'reference',
        'price',
        'description',
        'image_url',
        'nb_max',
        'nb_max_into_panier',
    ];

}
