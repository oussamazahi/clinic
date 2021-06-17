<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Vallidator;

use App\Models\Patient;

class PatientController extends Controller
{
    public function ajouter_patient(){
        return view('gestion_patient\ajouter_patient');
    } 
    public function liste_des_patient(){
        $patients = Patient::all();
        return view('gestion_patient\liste_des_patient',['patients'=>$patients]);
    }
    public function store(Request $request){

        $patient = new Patient();

        $rules= $this -> getRules();
        
        $message = $this->getMessages();
       
        $validator =  $request->validate($rules,$message);
       
        $patient->nom = request('nom');
        $patient->prenom = request('prenom');
        $patient->adresse_email = request('email');
        $patient->num_tel = request('num_tel');
        $patient->sexe = request('sexe');
        $patient->date_N = request('date_n');

        $patient-> save();

    return redirect('/liste_des_patient');
    }

    public function destroy($id){
        $patient = Patient::find($id);
        $patient->delete();

        return redirect('/liste_des_patient');
    }

    public function edit($id){
        $patient =Patient::findOrFail($id);
        $patient =Patient::select('id','nom','prenom','adresse_email','num_tel','sexe','date_N')->find($id);

       return view('gestion_patient.edit_patient',compact('patient'));
    }

    public function update(Request $request,$id){
        
        $patient =Patient::findOrFail($id);
        
        $rules= $this -> getRules();
        
        $message = $this->getMessages();
       
        $validator =  $request->validate($rules,$message);

        $patient-> update([
            'nom' =>request('nom'),
            'prenom' =>request('prenom'),
            'adresse_email' =>request('email'),
            'num_tel' =>request('num_tel'),
            'sexe' =>request('sexe'),
            'date_N' =>request('date_n')
           
        ]);
        return redirect('/liste_des_patient') ;
    }
    protected function getMessages(){
        return [
            'nom.required' => 'Entre votre nom',
            'nom.max' => 'Le nom est grand',
            'prenom.required' => 'Entre votre prenom',
            'prenom.max' => 'Le prenom est grand',
            'email.required' => 'Entre votre email',
            'email.unique' => ' Votre email existe déjè',
            'num_tel.required' => 'Entre votre numéro téléphone',
            'num_tel.numeric' => ' votre numéro téléphone est incorrect',
            'sexe.required' => 'Entre votre sexe',
            'date_n.required' => 'Entre votre date de naissance'
        ];
    }
    protected function getRules(){
        return 
        [
            'nom'=>'required | max:50',
            'prenom'=>'required | max:50',
            'email'=>'required | unique:patient,adresse_email',
            'num_tel'=>'required | numeric',
            'sexe'=>'required',
            'date_n'=>'required',
        ];
    }
}
