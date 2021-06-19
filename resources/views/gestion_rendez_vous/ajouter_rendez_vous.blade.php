@extends('layouts.app')

@section('content')

        <div class="content">
            <h1 class="backg" >Ajouter Rendez-vous</h1>
            <form action="/liste_des_rendez_vous" method="POST"  class="backg" style="padding:10px;background-color: #ffffff8c;border-radius: 10px;">
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
                <label for="heure_rdv">Heure de renrez-vous</label>
                <input type="time" id="heure_rdv" name="heure_rdv"class="form-control @error('heure_rdv') is-invalid @enderror" >
                
                @error('heure_rdv')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror

                </div>
                
                <div class="mb-3">
                <label for="date_rdv">Date de rendez-vous </label>
                <input type="date" id="date_rdv" name="date_rdv"class="form-control @error('date_rdv') is-invalid @enderror" >
                
                @error('date_rdv ')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                
                <div class="mb-3">
               
                <input class=" @error('etat_rdv') is-invalid @enderror" type="radio" name="etat_rdv" id="etat_rdv" value="Urgent">
                <label for="urgent">Rendez-vous Urgent </label><br>
                <input class=" @error('etat_rdv') is-invalid @enderror" type="radio" name="etat_rdv" id="etat_rdv"value="Normale">
                <label  for="Normale"> Rendez-vous Normale  </label>

                @error('etat_rdv')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror

                </div>
                <br>
                
                <div class="col-12">
                    <button class="btn btn-outline-dark" type="submit">Enregistrer</button>
                    <a href="/liste_des_rendez_vous">
                    <button type="button" class="btn btn-outline-dark"> Annuler </button>
                    </a>
                </div>
                

            </form>
           
        </div>
@endsection