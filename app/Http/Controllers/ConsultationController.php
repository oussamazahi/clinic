<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Consultation;

use App\Models\Rendez_vous;

use App\Models\Patient;

use App\Models\Ordonnance;




class ConsultationController extends Controller
{
    public function liste_des_consultation(){
        $cons = Consultation::all()->map(function ($item) {
            $patient = patient::find($item->id_patient);
            $item['nom_patient'] = $patient->nom;
            $item['prenom_patient'] = $patient->prenom;
            return $item;
        });
        return view('gestion_consultation\liste_des_consultation',['cons'=>$cons]);
      //  return view();
    }
    public function ajouter_consultation(){
        $patient = Patient::all();
        $rdv = Rendez_vous::all();
        $cons = Consultation::all();
        return view('gestion_consultation\ajouter_consultation',compact("patient","rdv","cons"));
    } 
    public function store(){

        $cons = new Consultation();
        $cons->id_patient = request('id_patient');
        $cons->id_rdv = request('id_rdv');
        $cons->id_ord = request('id_ord');
        $cons->concluion = request('concluion');
        $cons->examen = request('examen');
        $cons->motif = request('motif');
        $cons-> save();

    return redirect('/liste_des_consultation');
    }

    public function destroy($id){
        $cons = Consultation::find($id);
        $cons->delete();

        return redirect('/liste_des_consultation');
    }

    public function edit($id){
        $cons =Consultation::findOrFail($id);
        $cons =Consultation::select('id','nom','prenom','adresse_email','num_tel','sexe','date_N')->find($id);

       return view('gestion_patient.edit_patient',compact('patient'));
    }

    public function update(Request $request,$id){
        
        $cons =Consultation::findOrFail($id);
        $cons-> update([
            'exa' =>request('exa'),
            'prenom' =>request('prenom'),
            'adresse_email' =>request('email'),
            'num_tel' =>request('num_tel'),
            'sexe' =>request('sexe'),
            'date_N' =>request('date_N')
           
        ]);
        return redirect('/liste_des_patient') ;
    }
}
