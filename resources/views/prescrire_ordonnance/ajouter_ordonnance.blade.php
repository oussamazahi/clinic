@extends('layouts.app')

@section('content')

        <div class="content">
            <h1 class="backg" >Ajouter Ordonnance</h1>
            <form action="/ordonnance/{{ $consultation->id }}/{{$patient->id}}/{{$Nm}}" method="POST"  class="backg" >
                @csrf
                <br> 
                <input type="hidden" id="consultationId" value="{{ $consultation->id }}">
                <select class="form-select" name="id_patient" id="id_patient">
                    <option value="{{$patient->id}}" >{{$patient->nom}} -- {{$patient->prenom}} </option>
                </select>
                <div class="mb-3">
                <label for="date_ord">Date de ordonnace</label>
                <input type="date" id="date_ord" name="date_ord" class="form-control" >
                <!--
                @error('date_rdv ')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                -->
                <label for="NumberMed">Number Medicament</label>
               <input type="number" id="NumberMed" value="{{ $Nm }}"  class="form-control">
               <input type='button' id='AddMed'  class="btn btn-outline-dark" onclick='location.replace("/ordonnance.ajouter/" + document.getElementById("consultationId").value + "/" + document.getElementById("NumberMed").value)' value='Add'>
                
               <hr/>
                @for($i = 0;$i < $Nm;$i++)
                <select class="form-select" name="MedicamentNumber{{$i}}" id="medicament">
                        @foreach($med as $medic)
                            <option value="{{$medic->id}}" >{{$medic->nom_com}}</option>
                        @endforeach
                    </select>
                    <input type="text" name="medicNumber{{$i}}" id="" placeholder="posologie" class="form-control">
                    <hr/>
                @endfor
                <div class="col-12">
                    <button class="btn btn-outline-dark" type="submit">Enregistrer</button>
                    <a href="/liste_des_consultation">
                    <button type="button" class="btn btn-outline-dark"> Annuler </button>
                    </a>
                </div>
                

            </form>
           
        </div>
@endsection