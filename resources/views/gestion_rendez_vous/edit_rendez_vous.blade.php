@extends('layouts.app')

@section('content')

        <div class="content">
            <h1 class="backg" >Modifier Rendez-vous</h1>
            <form action="/update_rendez_vous/{{$rdv->id_rdv}}" method="POST"  class="backg">
                @csrf
                <br>
                
                <select class="form-select @error('id_patient') is-invalid @enderror " name="id_patient">
                <option value="{{$patient->id}}" >{{$patient->nom}} -- {{$patient->prenom}} </option>
                @error('id_patient')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </select>
                
                <div class="mb-3">
                <label for="heure_rdv">Heure de renrez-vous</label>
                <input type="time" id="heure_rdv" name="heure_rdv" value="{{ $rdv->heure_rdv }}" class="@error('heure_rdv') is-invalid @enderror form-control" required>
                @error('heure_rdv')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                
                <div class="mb-3">
                <label for="date_rdv">Date de rendez-vous </label>
                <input type="date" id="date_rdv" name="date_rdv" value="{{ $rdv->date_rdv }}" class="@error('date_rdv') is-invalid @enderror form-control" required >
                @error('date_rdv')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                @if($rdv->etat_rdv =="Urgent")
                <div class="form-check">
                <input class=" @error('etat_rdv') is-invalid @enderror" type="radio" name="etat_rdv" id="urgent" value="Urgent" checked>
                <label for="urgent">Rendez-vous Urgent </label><br>
                <input class=" @error('etat_rdv') is-invalid @enderror" type="radio" name="etat_rdv" id="normale"value="Normale">
                <label for="flexRadioDefault2"> Rendez-vous Normae  </label>
                @error('etat_rdv')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                @else
                <div class="form-check">
                <input class=" @error('etat_rdv') is-invalid @enderror" type="radio" name="etat_rdv" id="urgent" value="Urgent" >
                <label for="urgent">Rendez-vous Urgent </label><br>
                <input class=" @error('etat_rdv') is-invalid @enderror" type="radio" name="etat_rdv" id="normale"value="Normale" checked>
                <label  for="flexRadioDefault2"> Rendez-vous Normae  </label>
                @error('etat_rdv')
                    <div class="alert alert-danger ">{{ $message }}</div>
                @enderror
                </div>
                @endif
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