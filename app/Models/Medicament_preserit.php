<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medicament_preserit extends Model
{
    protected $table ='medicament_preserit';
    protected $fillable=[	
        'id_med',
        'created_at',
        'updated_at',
        'id_patient',
        'posolgie'
    ];
    protected $hidden=[ 
        'created_at',
        'updated_at'
    ];
}
