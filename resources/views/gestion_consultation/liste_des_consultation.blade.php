@extends('layouts.app')

@section('content')
    <div class="content "> 
        
        <h1 class="backg" >
            Liste Des Consultation
        
        </h1>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end  mb-2">
            <a href="{{route('ajouter_consultation')}}"> 
            <button type="button" class="btn btn-outline-dark"> Ajouter Consultation
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
            </svg>
            </button>
            </a>  
        </div>
        <table class="table backg">
            <thead>
                <tr>
                <th scope="col">Nom patient </th>
                <th scope="col">Prenom patient</th>
                <th scope="col">Examen</th>
                <th scope="col">Motif</th>
                <th scope="col">Concluion</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
            @foreach($cons as $consultation)
                <tr>
                    <td>{{$consultation->nom_patient}} </td>
                    <td>{{$consultation->prenom_patient}} </td>
                    <td>{{$consultation->examen}} </td>
                    <td>{{$consultation->motif}} </td>
                    <td>{{$consultation->concluion}} </td>
                    <td>
                        <a href="/edit_consultation/{{$consultation->id}}">
                            <button class="btn btn-outline-dark">
                                <img src="img/border-color.png" alt="Modifier">
                            </button>
                        </a>
                        
                        <form class="delete" action="/liste_des_consultation/{{$concultation->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button  class="btn btn-outline-dark">
                        <img src="img/trash-can-outline (6).png" alt="Supprimer">
                        </button>
                        </td>
                        </form>    
                
                </tr>
                @endforeach
            </tbody>
            
        </table>
  <     
        <a href="/home"> <button class="btn btn-outline-dark" > Retour </button></a>
    </div>
@endsection