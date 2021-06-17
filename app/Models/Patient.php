<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{  
    protected $table ='patient';
    protected $fillable=[	
        'id',
        'nom',
        'prenom',
        'age',
        'adresse_email',
        'num_tel',
        'sexe',
        'date_N',
        'created_at',
        'updated_at'
    ];
    protected $hidden=[ 
        'created_at',
        'updated_at'
    ];
}
