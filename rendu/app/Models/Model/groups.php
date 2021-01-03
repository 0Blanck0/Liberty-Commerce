<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class groups extends Model
{
    use HasFactory;

    protected $table = 'groups';

    public function permissions()
    {
        return $this->belongsToMany('App\Models\Model\permissions', 'permissions_list');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User', 'groups_list');
    }

}
