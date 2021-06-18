@extends('layouts.app')

@section('content')

    <div class="content">
        <h1 class="backg" >Ajouter Consultation</h1>
        <form action="{{ route('liste_consultation') }}" method="POST"  class="backg">
            @csrf
            <select class="form-select " name="id_rdv">
                <option selected>Choisir RDV</option>
                    @foreach($rdv as $rdvous)
                        <option value="{{$rdvous->id_rdv}}" >{{$rdvous->nom_patient}} -- {{$rdvous->prenom_patient}} </option>
                    @endforeach
            </select>
            <div class="mb-3">
            <label for="concluion">Concluion</label>
            <input type="text" id="concluion" name="concluion"class="form-control"  >
            </div>
            
            <div class="mb-3">
            <label for="examen">Examen</label>
            <input type="text" id="examen" name="examen"class="form-control">
            </div>
            
            <div class="mb-3">
            <label for="motif">Motif</label>
            <input type="text" id="motif" name="motif"class="form-control"    >
            </div>
            <div class="col-12">
                <a href="{{route('liste_consultation')}} "> <button class="btn btn-outline-dark" > Annuler  </button></a>
                <button class="btn btn-outline-dark" type="submit">Enregistrer</button>
            </div>

        </form>
    </div>
@endsection