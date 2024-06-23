@extends('public.layouts.app2')

@section('titre1', "Page d'accueil")

@section('contenu1')

<div class="site-blocks-cover">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-12" data-aos="fade-up" data-aos-delay="400">

          <div class="row justify-content-center mb-4">

            
            <div class="col-md-10 text-center">
              <h2>Bienvenue sur l'Apprentissage du pluriel des mots Moore par <span class="typed-words"></span></h2>
              @auth
              <div style="margin-top: 10vh;">
                @if (auth()->user()->role == "admin")
                <a  href="{{ route('admin.tableauBord') }}" class="btn btn-primary btn-md mb-1"> Aller dans mon compte</a> 
                @else
                <a  href="{{ route('user.tableauBord') }}" class="btn btn-primary btn-md">Aller dans mon compte</a>
                @endif
              </div>
              @else
              <div style="margin-top: 10vh;">
                <a  href="{{ route('public.inscription') }}" class="btn btn-primary btn-md mb-1"> Inscrivez-vous</a> 
                <a  href="{{ route('public.connexion') }}" class="btn btn-primary btn-md">Connectez-vous</a>
              </div>
              @endauth
              <!-- <div style="margin-top: 5px; "></div> -->
            </div>
          </div>

        </div>
      </div>
    </div>
  </div> 
    
@endsection