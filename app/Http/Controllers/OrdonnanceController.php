<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Vallidator;

use App\Models\Patient;

use App\Models\Ordonnance;

use App\Models\Medicament_preserit;

use App\Models\Medicament;

use PDF;

class OrdonnanceController extends Controller
{
    public function ordonnance($id){
        $ord = Ordonnance::find($id);
        return view('prescrire_ordonnance.ordonnance',compact('ord'));
    }
    public function ajouter(){
        $patients = Patient::all();
        return view('prescrire_ordonnance.ajouter_ordonnance',compact('patients'));
    }
    public function save(Request $request){
        $ord = new Ordonnance();
        $ord->date_ord = request('date_ord');
        $ord->save();
        return redirect('/liste_des_consultation');

    }
   
}
