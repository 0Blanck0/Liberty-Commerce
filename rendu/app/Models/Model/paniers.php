<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paniers extends Model
{
    use HasFactory;

    protected $table = 'paniers';

    public function receipt()
    {
        return $this->hasOne('app\Models\Model\receipt', 'paniers_id', 'id');
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
