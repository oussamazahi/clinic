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
            $item['id_patient'] = $patient->id;
            $item['nom_patient'] = $patient->nom;
            $item['prenom_patient'] = $patient->prenom;
            return $item;
        });
        return view('gestion_consultation\liste_des_consultation',['cons'=>$cons]);
     
    }
    public function ajouter_consultation(){
        $patient = Patient::all();
        $rdv = Rendez_vous::all()->map(function ($item) {
            $patient = patient::find($item->id_patient);
            
            $item['nom_patient'] = $patient->nom;
            $item['prenom_patient'] = $patient->prenom;
            return $item;
        });
        $cons = Consultation::all();
        return view('gestion_consultation\ajouter_consultation',compact("patient","rdv","cons"));
    } 
    public function store(){
        $cons = new Consultation();
        $cons->id_rdv = request('id_rdv');
        $rdv = Rendez_vous::where('id_rdv',request('id_rdv'))->get()->first();
        $cons->id_patient = $rdv->id_patient;
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
        $cons =Consultation::find($id);
        $patient = Patient::find($cons->id_patient);

       return view('gestion_consultation.edit_consultation',compact('cons','patient'));
    }

    public function update(Request $request,$id){
        
        $cons =Consultation::findOrFail($id);
        $cons-> update([
            'examen' =>request('examen'),
            'motif' =>request('motif'),
            'concluion' =>request('concluion'),
        ]);
        return redirect('/liste_des_consultation') ;
    }
}
