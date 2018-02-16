<?php

namespace App\Recursos;

use Illuminate\Database\Eloquent\Model;

class Telefono extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'numero', 'minsal',
    ];

    public function user() {
    	return $this->belongTo(User::class);
    }
}
