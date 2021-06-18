@extends('layouts.app')

@section('content')

    <div class="content">
        <h1 class="backg" >Modifier Consultation</h1>
        <form action="/update_consultation/{{ $cons->id }}" method="POST"  class="backg">
            @csrf
            <h2 >{{ $patient->nom . ' -- ' . $patient->prenom }}</h2>
                
            <div class="mb-3">
            <label for="concluion">Concluion</label>
            <input type="text" id="concluion" name="concluion"class="form-control" value="{{ $cons->concluion }}" required >
            </div>
            
            <div class="mb-3">
            <label for="examen">Examen</label>
            <input type="text" id="examen" name="examen"class="form-control" value="{{ $cons->examen }}" required  maxlength="50" >
            </div>
            
            <div class="mb-3">
            <label for="motif">Motif</label>
            <input type="text" id="motif" name="motif" class="form-control" value="{{ $cons->motif }}" required  maxlength="50" >
            </div>
            <div class="col-12">
                <button class="btn btn-outline-dark" type="submit">Enregistrer</button>
                <a href="{{route('liste_consultation')}}"> <button class="btn btn-outline-dark" > Annuler  </button></a>
            </div>

        </form>
    </div>
@endsection