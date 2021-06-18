@extends('layouts.app')

@section('content')

    <div class="content">
        <h1 class="backg" >Modifer Medicament</h1>
        <form action="/update_medicament/{{$med->id}}" method="POST" class="backg" >
            @csrf
            <div class="mb-3">
            <label for="nom_scie">Nom Scientifique</label>
            <input type="text" id="nom_scie" name="nom_scie"class="form-control @error('nom_scie') is-invalid @enderror" value  ="{{$med->nom_scie}}">
            @error('nom_scie')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror    
            </div>
            
            <div class="mb-3">
            <label for="nom_com">Nom Commercial</label>
            <input type="text" id="nom_com" name="nom_com"class="form-control @error('nom_com') is-invalid @enderror" value  ="{{$med->nom_com}}">
            @error('nom_com')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror    
            </div>
            <div class="col-12">
               
                <button class="btn btn-outline-dark" type="submit">Enregistrer</button>
                <a href="/liste_des_medicament"><button class="btn btn-outline-dark"> Retour </button> </a>
            </div>

        </form>
        
    </div>
@endsection