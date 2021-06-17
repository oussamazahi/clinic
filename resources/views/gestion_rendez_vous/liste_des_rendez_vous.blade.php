@extends('layouts.app')

@section('content')
            <div class="content "> 
                <h1  class="backg" >
                   Liste Des Rendez-vous
              
                </h1>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end  mb-2">
                    <a href="{{route('ajoutre_rendez_vous')}}"> 
                    <button type="button" class="btn btn-outline-dark"> Ajouter Rendez-vuos  
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path d="M8 0a1 1 0 0 1 1 1v6h6a1 1 0 1 1 0 2H9v6a1 1 0 1 1-2 0V9H1a1 1 0 0 1 0-2h6V1a1 1 0 0 1 1-1z"/>
                    </svg>
                    </button>
                    </a>  
                </div>
                <table class="table  backg">
                    <thead>
                        <tr>
                        <th scope="col">Nom de patient</th>
                        <th scope="col">Prenom de patient</th>
                        <th scope="col">Etat de rendez-vous</th>
                        <th scope="col">Date de rendez-vous</th>
                        <th scope="col">Heure de rendez-vous</th>
                        <th scope="col">Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rdv as $rendez_vous)
                        <tr>
                            <td>{{$rendez_vous->nom_patient}} </td>
                            <td>{{$rendez_vous->prenom_patient}} </td>
                            <td>{{$rendez_vous->etat_rdv}} </td>
                            <td>{{$rendez_vous->date_rdv}} </td>
                            <td>{{$rendez_vous->heure_rdv}} </td>
                            <td>
                                <a href="/edit_rendez_vous/{{$rendez_vous->id_rdv}}">
                                    <button class="btn btn-outline-dark">
                                        <img src="img/border-color.png" alt="Modifier">
                                    </button>
                                </a>
                                
                                <form class="delete" action="/liste_des_rendez_vous/{{$rendez_vous->id_rdv}}" method="POST">
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
            
            <a href="/home"><button type="button" class="btn btn-outline-dark"> Retour </button></a> 
            </div>
            
@endsection