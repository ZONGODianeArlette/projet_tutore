@extends('private.layouts.app')

@section('titre', "Detail de la $lesson->nom")

@section('contenu')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <h2>
                    Detail de la {{$lesson->nom}}
                </h2>
                <a href="{{ route('ajout-mot-moore', $lesson->id) }}" class="btn btn-primary text-white mt-2 mt-xl-0 float-left-btn" title="Cliquez ici pour ajouter une nouvelle Lesson">Ajouter un mot mooré</a>
               
            </div>
        </div>
    </div>
    
@endsection
