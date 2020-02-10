<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sc extends Model
{
	protected $table='system_sonfiguration';
	protected $primaryKey='id';
    protected $fillable = [
        'system_title', 'system_adress', 'about_system',
    ];
}
