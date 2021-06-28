<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rendez_vous;

use App\Models\Patient;

use Illuminate\Support\Facades\Vallidator;


class Rendez_vousController extends Controller
{
    public function liste_des_rendez_vous(){
       
        
        // $rdv= Rendez_vous::orderBy('heure_rdv','desc')->get();
        //$rdv= Rendez_vous::orderBy('etat_rdv','desc')->get();
        // $rdv= Rendez_vous::orderBy('date_rdv')->get();
        $rdv = Rendez_vous::all()->map(function ($item) {
            $patient = patient::find($item->id_patient);
            $item['nom_patient'] = $patient->nom;
            $item['prenom_patient'] = $patient->prenom;
            return $item;
        });
        return view('gestion_rendez_vous\liste_des_rendez_vous',['rdv'=>$rdv]);
    }
    public function ajouter_rendez_vous(){
        $patients = Patient::all();
        return view('gestion_rendez_vous\ajouter_rendez_vous',compact("patients"));
    }
    
    public function store( Request $request){
        $rdv = new Rendez_vous();

        $rules=  [
            'id_patient'=>'required | max:50',
            'etat_rdv'=>'required | max:50',
            'date_rdv'=>'required ',
            'heure_rdv'=>'required ',
        ];
        
        $message = [
            'id_patient.required' => 'Choisir votre patient',
            'id_patient.max' => 'Le patient est grand',
            'etat_rdv.required' => 'Choisir votre etate de rendez-vous',
            'etat_rdv.max' => 'Le rendez-vous est grand',
            'date_rdv.required' => 'Entre votre date rendez-vous',
            'heure_rdv.required' => 'Entre votre heure rendez-vous',
            'date_rdv.unique' => ' Votre date rendez-vous exist déja',
            'heure_rdv.unique' => 'Votre heure rendez-vous exist déja',
        ];
       
        $validator =  $request->validate($rules,$message);

        $rdv->id_patient = request('id_patient'); 
        $rdv->etat_rdv = request('etat_rdv');
        $rdv->date_rdv = request('date_rdv');
        $rdv->heure_rdv = request('heure_rdv');
        $rdv->save();
        return redirect('/liste_des_rendez_vous');
    }
    public function destroy($id){
        $rdv = Rendez_vous::where('id_rdv',$id);
        $rdv->delete();
        return redirect('/liste_des_rendez_vous');
    }
    public function edit($id){
        $rdv =Rendez_vous::where('id_rdv',$id)->get()->first();
        $patient = patient::find($rdv->id_patient);
       return view('gestion_rendez_vous.edit_rendez_vous',compact('rdv','patient'));
    }

    public function update(Request $request,$id){
        
        $rdv =Rendez_vous::where('id_rdv',$id);

        $rules= [
            'id_patient'=>'required | max:50',
            'etat_rdv'=>'required | max:50',
            'date_rdv'=>'required  ',
            'heure_rdv'=>'required '
        ];
    
        
        $message =  [
            'id_patient.required' => 'Choisir votre patient',
            'id_patient.max' => 'Le patient est grand',
            'etat_rdv.required' => 'Choisir votre rendez-vous',
            'etat_rdv.max' => 'Le rendez-vous est grand',
            'date_rdv.required' => 'Entre votre date rendez-vous',
            'heure_rdv.required' => 'Entre votre heure rendez-vous',
        ];
      
       
       
        $rdv-> update([
            'etat_rdv' => request('etat_rdv'),
            'date_rdv' => request('date_rdv'),
            'heure_rdv' => request('heure_rdv'),
           
        ]);
        return redirect('/liste_des_rendez_vous') ;
    }  
}
