@extends('layouts.app')

@section('content')
<div class="content">
    <h1 class="backg"> Mdodifier Patient</h1>
    <form action="/update_patient/{{$patient->id}}" method="POST"  class="backg" style="padding:10px;background-color: #ffffff8c;border-radius: 10px;">
        @csrf

        <div class="mb-3">
        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom"class="form-control  @error('nom') is-invalid @enderror"  value="{{$patient->nom}}" >
        @error('nom')
            <div class="alert alert-danger ">{{ $message }}</div>
        @enderror
        </div>
        
        <div class="mb-3">
        <label for="prenom">Prenom</label>
        <input type="text" id="prenom" name="prenom"class="form-control @error('prenom') is-invalid @enderror" value="{{$patient->prenom}}"  >
        @error('prenom')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror     
        </div>
        <div class="mb-3">
            <label for="email">Email</label>
            <input type="email"name="email"class="form-control" id="exampleInputEmail1" value="{{$patient->adresse_email}}" aria-describedby="emailHelp"  >
           
        </div> 
        <div class="mb-3">
        <label for="num_tel">Numero telephone</label>
        <input type="text" name="num_tel" class="form-control  @error('num_tel') is-invalid @enderror"id="num_tel"required  value="{{$patient->num_tel}}"  minlength="10" maxlength="10" size="10">
        @error('num_tel')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror    
        </div>

        <div class="mb-3">
        <label for="date_n">Date De Naissance</label>
        <input type="date" id="date_n" name="date_n"class="form-control  @error('date_n') is-invalid @enderror" value="{{$patient->date_N}}">
        @error('date_n')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror   
        </div>
        
        @if($patient->sexe=="homme")
        <div class="mb-3">
        <label for="sexe">Sexe :</label> 
        <input type="radio" name="sexe" id="sexe" value="homme" checked class=" @error('sexe') is-invalid @enderror">
        <label for="masculin">homme</label>
        <input type="radio"  name="sexe" id="sexe" value="femme"class=" @error('sexe') is-invalid @enderror">
        <label for="feminin">femme</label>
        @error('sexe')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        </div>
        @else
        <div class="mb-3">
        <label for="sexe">Sexe :</label> 
        <input type="radio" name="sexe" id="sexe" value="homme" class=" @error('sexe') is-invalid @enderror">
        <label for="masculin">homme</label>
        <input type="radio"  name="sexe" id="sexe" value="femme"checked class=" @error('sexe') is-invalid @enderror">
        <label for="feminin">femme</label>
        @error('sexe')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
        </div>
        @endif
        <hr>
        <div class="col-12">
            <button class="btn btn-primary" type="submit">Enregistrer</button>
            <a href="{{route('liste_patient')}}"><button class="btn btn-primary" > Annuler </button></a>
        </div>

    </form>
</div>

@endsection