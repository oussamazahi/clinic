<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Vallidator;

use App\Models\Patient;

use App\Models\Ordonnance;

use App\Models\Medicament_preserit;

use App\Models\Medicament;

use App\Models\Consultation;

use PDF;

class OrdonnanceController extends Controller
{
    public function ordonnance($id){
        $ord = Ordonnance::find($id);
        $cons =Consultation::where('id_ord',$id)->get()->first();
        // $patient = Patient::where('id',$cons->id_patient)->get()->map(function ($item) {
        //     $item['age'] = $item->date_N;
        //     return $item;
        // });
        $patient = Patient::find($cons->id_patient);
        $mp = Medicament_preserit::where('id_ord',$id)->get()->map(function ($item) {
            $medic = Medicament::find($item->id_med);
            $item['NomMedic'] = $medic->nom_com;
            return $item;
        });

        return view('prescrire_ordonnance.ordonnance',compact('ord','cons','patient','mp'));
    }
    public function ajouter($id,$Nm = 0){
        $consultation = Consultation::find($id);
        $patient = Patient::find($consultation->id_patient);
        $med = Medicament::orderBy('nom_com')->get();
        return view('prescrire_ordonnance.ajouter_ordonnance',compact('consultation','patient','med','Nm'));
    }
    public function save(Request $request,$id,$idPatient,$Nm = 0){

        $ord = new Ordonnance();
        $ord->date_ord = request('date_ord');
        $ord-> save();

        $cons =Consultation::findOrFail($id);
        $cons-> update([
            'id_ord' => $ord->id,
        ]);

        
        for($i = 0;$i < $Nm;$i++){
            $mp = new Medicament_preserit();
            $mp->id_med = request('MedicamentNumber' . $i );
            $mp->id_patient = $idPatient;
            $mp->id_ord = $ord->id;
            $mp->posologie = request('medicNumber' . $i );
            $mp-> save();
        }
        return redirect('/liste_des_consultation');

    }
   
}
