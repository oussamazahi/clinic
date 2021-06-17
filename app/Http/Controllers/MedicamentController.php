<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Medicament;

class MedicamentController extends Controller
{
    public function liste_des_medicament(){
        $med = Medicament::orderBy('nom_com')->get();
        return view('gestion_medicament\liste_des_medicament',['med'=>$med]);
    }
    public function ajouter_medicament(){
        return view('gestion_medicament\ajouter_medicament');
    }
    public function  store(Request $request){

        $med = new Medicament();
        $rules= $this -> getRules();
        
        $message = $this->getMessages();

        $validator =  $request->validate($rules,$message);

        $med->nom_com =request('nom_com');
        $med->nom_scie =request('nom_scie');
        $med->save();
        return redirect('/liste_des_medicament');
    }
    public function destroy($id){
        $med = Medicament::find($id);
        $med->delete();
        return redirect('/liste_des_medicament');
    }
    public function edit($id){
        $med =Medicament::findOrFail($id);
        $med =Medicament::select('id','nom_com','nom_scie')->find($id);

       return view('gestion_medicament.edit_medicament',compact('med'));
    }

    public function update(Request $request, $id){
        
        $med =Medicament::findOrFail($id);
        $med-> update([
            'nom_com' =>request('nom_com'),
            'nom_scie' =>request('nom_scie')
        ]);
        return redirect('/liste_des_medicament') ;
    }
    protected function getMessages(){
        return [
            'nom_scie.required' => 'Entre votre nom scientifique',
            'nom_scie.max' => 'Le nom scientifique est grand',
            'nom_com.required' => 'Entre votre nom commercial',
            'nom_com.max' => 'Le nom commercial est grand',
            
        ];
    }
    protected function getRules(){
        return 
        [
            'nom_com'=>'required | max:50',
            'nom_scie'=>'required | max:50',
            
        ];
    }
}
/**public function liste_des_medicament(){
        $med = Medicament::orderBy('nom_com')->get();
        return view('gestion_medicament\liste_des_medicament',['med'=>$med]);
    }
    public function ajouter_medicament(){
        return view('gestion_medicament\ajouter_medicament');
    }
    public function  store(Request $request){

        $med = new Medicament();
        $rules= $this -> getRules();
        
        $message = $this->getMessages();

        $validator =  $request->validate($rules,$message);

        $med->nom_com =request('nom_com');
        $med->nom_scie =request('nom_scie');
        $med->save();
        return redirect('/liste_des_medicament');
    }
    public function destroy($id){
        $med = Medicament::find($id);
        $med->delete();
        return redirect('/liste_des_medicament');
    }
    public function edit($id){
        $med =Medicament::findOrFail($id);
        $med =Medicament::select('id','nom_com','nom_scie')->find($id);

       return view('gestion_medicament.edit_medicament',compact('med'));
    }

    public function update(Request $request, $id){
        
        $med =Medicament::findOrFail($id);
        $med-> update([
            'nom_com' =>request('nom_com'),
            'nom_scie' =>request('nom_scie')
        ]);
        return redirect('/liste_des_medicament') ;
    }
    protected function getMessages(){
        return [
            'nom_scie.required' => 'Entre votre nom scientifique',
            'nom_scie.max' => 'Le nom scientifique est grand',
            'nom_com.required' => 'Entre votre nom commercial',
            'nom_com.max' => 'Le nom commercial est grand',
            
        ];
    }
    protected function getRules(){
        return 
        [
            'nom_com'=>'required | max:50',
            'nom_scie'=>'required | max:50',
            
        ];
    } */