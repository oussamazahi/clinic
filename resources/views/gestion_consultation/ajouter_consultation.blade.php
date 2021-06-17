@extends('layouts.app')

@section('content')

    <div class="content">
        <h1 class="backg" >Ajoute Consultation</h1>
        <form action="{{ route('liste_consultation') }}" method=""  class="backg">
            @csrf
            <select class="form-select " name="id_patient">
                <option selected>Choisir Patient</option>
                    @foreach($patient as $patient)
                        
                    @endforeach
            </select>
            <select class="form-select " name="id_rdv">
                <option selected>Choisir RDV</option>
                    @foreach($rdv as $rdvous)
                        <option value="{{$rdvous->id}}" >{{$patient->nom}} -- {{$patient->prenom}} </option>
                    @endforeach
            </select>
            <div class="mb-3">
            <label for="concluion">Concluion</label>
            <input type="text" id="concluion" name="concluion"class="form-control" required >
            </div>
            
            <div class="mb-3">
            <label for="examen">Examen</label>
            <input type="text" id="examen" name="examen"class="form-control" required  maxlength="50" >
            </div>
            
            <div class="mb-3">
            <label for="motif">Motif</label>
            <input type="text" id="motif" name="motif"class="form-control" required  maxlength="50" >
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit">Enregistrer</button>
            </div>

        </form>
    </div>
@endsection