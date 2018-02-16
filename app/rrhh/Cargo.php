<?php

namespace App\rrhh;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    

    public function users() {
    	return $this->belongsToMany(User::class);
    }
}
