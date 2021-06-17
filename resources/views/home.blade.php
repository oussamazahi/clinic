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
                                <h5 class="card-title">liste des patient </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route('liste_patient')}}" class="btn btn-primary">Go </a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title"> liste des rendez-vous</h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route('liste_rendez_vous')}}" class="btn btn-primary">Go</a>
                            </div>
                            </div>
                        </div>
                    </div>       
                    <br>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">liste des consultation </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route('liste_consultation')}}" class="btn btn-primary">Go</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">liste des medicament </h5>
                                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                                <a href="{{route('liste_medicament')}}" class="btn btn-primary">Go</a>
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
