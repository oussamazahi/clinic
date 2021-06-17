<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicament_preserit extends Model
{
    protected $table ='medicament';
    protected $fillable=[	
        'id',
        'nom_com',
        'nom_scie',
        'created_at',
        'updated_at'
    ];
    protected $hidden=[ 
        'created_at',
        'updated_at'
    ];
}
