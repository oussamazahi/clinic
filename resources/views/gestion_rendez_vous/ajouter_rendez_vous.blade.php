@extends('layouts.app')

@section('content')

        <div class="content">
            <h1 class="backg" >Ajouter Rendez-vous</h1>
            <form action="/liste_des_rendez_vous" method="POST"  class="backg" style="padding:10px;background-color: #ffffff8c;border-radius: 10px;">
                @csrf
                <br>
                
                <select class="form-select " name="id_patient">
                <option selected>Choisir Patient</option>
                    @foreach($patients as $patient)
                        <option value="{{$patient->id}}" >{{$patient->nom}} -- {{$patient->prenom}} </option>
                    @endforeach
                </select>
                <div class="mb-3">
                <label for="heure_rdv">Heure de renrez-vous</label>
                <input type="time" id="heure_rdv" name="heure_rdv"class="form-control" required>
                </div>
                
                <div class="mb-3">
                <label for="date_rdv">Date de rendez-vous </label>
                <input type="date" id="date_rdv" name="date_rdv"class="form-control" required >
                </div>
                
                <div class="form-check">
               
                <input class="form-check-input" type="radio" name="etat_rdv" id="urgent" value="Urgent">
                <label for="urgent"class="form-check-label">Rendez-vous Urgent </label><br>
                <input class="form-check-input" type="radio" name="etat_rdv" id="normale"value="Normale">
                <label class="form-check-label" for="flexRadioDefault2"> Rendez-vous Normae  </label>

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