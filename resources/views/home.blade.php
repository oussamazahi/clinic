@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h1>Menu</h1></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Gérer patient </h3>
                                <p style="font-size: initial;">Vous trouver ici  la liste des patients et ses gestions</p>
                                <a href="{{route('liste_patient')}}" class="btn btn-outline-dark">Entrer </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"> Gérer rendez-vous</h3>
                                <p style="font-size: initial;">Vous trouver ici  la liste des rendez-vous et ses gestions</p>
                                <a href="{{route('liste_rendez_vous')}}" class="btn btn-outline-dark">Entrer</a>
                            </div>
                            </div>
                        </div>
                    </div>       
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Gérer consultation </h3>
                                <p style="font-size: initial;">Vous trouver ici  la liste des consultation et ses gestions</p>
                                <a href="{{route('liste_consultation')}}" class="btn btn-outline-dark">Entrer</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">Gérer medicament </h3>
                                <p style="font-size: initial;">Vous trouver ici  la liste des medicament et ses gestions</p>
                                <a href="{{route('liste_medicament')}}" class="btn btn-outline-dark">Entrer</a>
                            </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
