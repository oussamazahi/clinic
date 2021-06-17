@extends('layouts.app')

@section('content')
    <div class="content "> 
        <h1 class="backg" >Liste Des Patient</h1>
        <div>
        
        
        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-2">
            <a href="{{route('ajouter_patient')}}"> 
            <button type="button" class="btn btn-outline-dark"> Ajouter Patient  
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
            </svg>
            </button>
            </a>  
        </div>

        </div>
        <table class="table backg" style="background-color: #ffffff8c;border-radius: 10px;">
            <thead>
                <tr>
                <th scope="col">Nom </th>
                <th scope="col">Pernom</th>
                <th scope="col">Adresse Email</th>
                <th scope="col">num tel</th>
                <th scope="col">Sexe</th>
                <th scope="col">Date De Naissance</th>
                <th scope="col">Options</th>
                </tr>
            </thead>
            <tbody>
                @foreach($patients as $patient)
                <tr>
                <td>{{ $patient->nom}}</td>
                <td>{{ $patient->prenom}}</td>
                <td>{{ $patient->adresse_email}}</td>
                <td>{{ $patient->num_tel}}</td>
                <td>{{ $patient->sexe}}</td>
                <td>{{ $patient->date_N}}</td>
                
                <td>
                    <a href="/edit_patient/{{$patient->id}}">
                    <button class="btn btn-outline-dark">
                        <img src="img/border-color.png" alt="Modifier">
                    </button>
                    </a>
               
                    <form class="delete" action="/liste_des_patient/{{$patient->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button  class="btn btn-outline-dark">
                    <img src="img/trash-can-outline (6).png" alt="Supprimer">
                    </button>
                    </form>
                    </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
  
    <div class="d-grid gap-2 d-md-block">
    <a href="/home"><button type="button" class="btn btn-outline-dark"> Retour </button></a>
    </div>
  
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