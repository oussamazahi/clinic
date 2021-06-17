@extends('layouts.app')

@section('content')

        <div class="content">
            <h1 class="backg" >Modifier Rendez-vous</h1>
            <form action="/liste_des_rendez_vous" method="POST"  class="backg">
                @csrf
                <br>
                
                <h2 name ="id_patient" value="$patient->id_patient">{{ $patient->nom . ' -- ' . $patient->prenom }}</h2>
                
                <div class="mb-3">
                <label for="heure_rdv">Heure de renrez-vous</label>
                <input type="time" id="heure_rdv" name="heure_rdv" value="{{ $rdv->heure_rdv }}" class="form-control" required>
                </div>
                
                <div class="mb-3">
                <label for="date_rdv">Date de rendez-vous </label>
                <input type="date" id="date_rdv" name="date_rdv" value="{{ $rdv->date_rdv }}" class="form-control" required >
                </div>
                @if($rdv->etat_rdv =="Urgent")
                <div class="form-check">
                <input class="form-check-input" type="radio" name="etat_rdv" id="urgent" value="Urgent" checked>
                <label for="urgent"class="form-check-label">Rendez-vous Urgent </label><br>
                <input class="form-check-input" type="radio" name="etat_rdv" id="normale"value="Normale">
                <label class="form-check-label" for="flexRadioDefault2"> Rendez-vous Normae  </label>
                </div>
                @else
                <div class="form-check">
                <input class="form-check-input" type="radio" name="etat_rdv" id="urgent" value="Urgent" >
                <label for="urgent"class="form-check-label">Rendez-vous Urgent </label><br>
                <input class="form-check-input" type="radio" name="etat_rdv" id="normale"value="Normale" checked>
                <label class="form-check-label" for="flexRadioDefault2"> Rendez-vous Normae  </label>
                </div>
                @endif
                <br>
                
                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Enregistrer</button>
                    <a href="/liste_des_rendez_vous">
                    <button type="button" class="btn btn-outline-dark"> Annuler </button>
                    </a>
                </div>
                

            </form>
           
        </div>
@endsection