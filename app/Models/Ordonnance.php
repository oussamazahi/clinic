<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ordonnance extends Model
{
    protected $table ='ordonnance';
    protected $fillable=[	
        'id',
        'date_ord',
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
    public function medicament()
    {
       return $this->belongsTo(medicament::class);
    }

}
