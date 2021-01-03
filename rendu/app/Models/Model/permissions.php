<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permissions extends Model
{
    use HasFactory;

    protected $table = 'permissions';

    public function groups()
    {
        return $this->belongsToMany('App\Models\Model\permissions', 'permissions_list');
    }

}
