<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $table ='consultation';
    protected $fillable=[	
        'id',
        'id_patient',
        'id_ord',
        'id_rdv',
        'concluion',
        'examen',
        'motif',
        'created_at',
        'updated_at'
    ];
    protected $hidden=[ 
        'created_at',
        'updated_at'
    ];
    public function patient()
    {
       return $this->belongsTo(patient::class);
    }
}

					