@extends('private.layouts.app')

@section('titre', "Detail de la $lesson->nom")

@section('contenu')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <h2>
                    Detail de la {{$lesson->nom}}
                </h2>
               
            </div>
        </div>
    </div>
    
@endsection
