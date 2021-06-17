<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rendez_vous extends Model
{
    protected $table ='rendez_vous';
    protected $fillable=[	
        'id_rdv',
        'id_patient',
        'etat_rdv',
        'date_rdv',
        'heure_rdv',
       
        'created_at',
        'updated_at'
    ];
    protected $hidden=[ 
        'created_at',
        'id_patient',
        'updated_at'
    ];
    public function patient()
    {
       return $this->belongsTo(patient::class);
    }
}



