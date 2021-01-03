<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class address extends Model
{
    use HasFactory;

    protected $table = 'address';

    public function users()
    {
        return $this->hasOne('app\Models\Model\users', 'address_id', 'id');
    }

    protected $fillable = [
        'firstname',
        'lastname',
        'street',
        'country',
        'postal_code',
    ];



}
