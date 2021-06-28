@extends('layouts.app')

@section('content')
<div class="content ">
   
    <h1 class="backg" >Ordonnance</h1>

    <table class="table backg" style="background-color: #ffffff8c;border-radius: 10px;">
        <thead>
        <tr>
            <tr>
            <td colspan="3"></td>
            <td colspan="1">Le : {{$ord->date_ord}} </td>
            </tr>
            <td colspan="3">Nom et Prenom :{{ $patient->nom}} {{$patient->prenom}} </td>
            <td colspan="1"> Date de Naissance : {{ $patient->date_N }} </td>
            </tr>
            
            <tr>
            <th scope="col" colspan="4">Ordonnance</th>
            </tr>
            
        </thead>
        <tbody>
            <tr>
            <th scope="col"colspan="2" > nom medicament</th>
            <th scope="col"colspan="2" >posologie</th>
            </tr>
            @foreach($mp as $medicP)
            <tr>
            <td colspan="2" >{{$medicP->NomMedic}}</td>
            <td colspan="2" >{{$medicP->posologie}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{route('liste_consultation')}} "> <button class="btn btn-outline-dark" > Retour </button></a>
        
</div>
@endsection