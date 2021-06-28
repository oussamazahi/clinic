@extends('layouts.app')

@section('content')
<div class="content "> 
    <h1 class="backg">
        Liste Des Medicament
    
    </h1>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end  mb-2">
        <a href="{{route('ajouter_medicament')}}"> 
        <button type="button" class="btn btn-outline-dark"> Ajouter Medicament  
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
        </svg>
        </button>
        </a>  
    </div>
    <table class="table backg ">
        <thead>
            <tr>
            <th scope="col">Nom Scientifique </th>
            <th scope="col">Nom Commercial</th>
            <th scope="col">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach($med as $med)
            <tr>
            <td>{{$med->nom_com}}</td>
            <td>{{$med->nom_scie}} </td>
            <td>
            <a href="/edit_medicament/{{$med->id}}">
                    <button class="btn btn-outline-dark">
                        <img src="img/border-color.png" alt="Modifier">
                    </button>
                    </a>
               
                <form class="delete" action="/liste_des_medicament/{{$med->id}}" method="POST">
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
        <a href="/home"> <button class="btn btn-outline-dark" > Retour </button></a>*
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
            <a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
            <button type="reset"class="btn btn-outline-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-double-up" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M7.646 2.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 3.707 2.354 9.354a.5.5 0 1 1-.708-.708l6-6z"/>
                    <path fill-rule="evenodd" d="M7.646 6.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 7.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
                </svg>
            </button>
            </a>
    </div>
</div>
@endsection