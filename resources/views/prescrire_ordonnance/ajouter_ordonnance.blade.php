@extends('layouts.app')

@section('content')

        <div class="content">
            <h1 class="backg" >Ajouter Ordonnance</h1>
            <form action="/ordonnance/5" method="POST"  class="backg" >
                @csrf
                <br> 
                <select class="form-select @error('id_patient') is-invalid @enderror" name="id_patient" id="id_patient">
                <option selected>Choisir Patient</option>
                    @foreach($patients as $patient)
                        <option value="{{$patient->id}}" >{{$patient->nom}} -- {{$patient->prenom}} </option>
                    @endforeach
                    @error('id_patient')
                        <div class="alert alert-danger ">{{ $message }}</div>
                    @enderror
                </select>
                <div class="mb-3">
                <label for="date_ord">Date de ordonnace</label>
                <input type="date" id="date_ord" name="date_ord"class="form-control" >
                <!--
                @error('date_rdv ')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                -->
               
              
                
                <div class="col-12">
                    <button class="btn btn-outline-dark" type="submit">Enregistrer</button>
                    <a href="/liste_des_consultation">
                    <button type="button" class="btn btn-outline-dark"> Annuler </button>
                    </a>
                </div>
                

            </form>
           
        </div>
@endsection