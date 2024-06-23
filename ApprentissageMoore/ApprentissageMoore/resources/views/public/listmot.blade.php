@extends('public.layouts.app2')

@section('titre1', "Listes des mots")

@section('contenu1')

<div class="site-blocks-cover" style="background-color: white">
  <div class="container">
    <div class="row align-items-center justify-content-center text-center">
      <div class="col-md-12 container-fluid ">
        
        <table class="table table-striped ">
          <h3 class="fs-16" style="margin:50px">Mots moorés disponibles pour votre apprentissage</h3>
          <div class="container">
            <div class="row justify-content-end mb-4">
              <div class="col-md-6"> <!-- Utilisation de col-md-6 pour diviser l'espace sur les écrans moyens et plus grands -->
                <form action="{{ route('public.listmot') }}" method="GET" class="input-group input-group-merge">
                  <div class="row">
                    <div class="col">
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        name="nom"
                        value="{{ request('nom') }}"
                        placeholder="Rechercher un mot"
                      />
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-primary">Rechercher</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          
          <thead>
            <tr>
              <th scope="col">Numéro</th>
              <th scope="col">Mots en Français</th>
              <th scope="col">Mots en Mooré</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($motmooresinguliers as $motmooresingulier)
            <tr>
              <th scope="row">{{ $motmooresinguliers->firstItem() + $loop->index }}</th>
              <td>{{ $motmooresingulier->mot_en_fr }}</td>
              <td>{{ $motmooresingulier->mot_en_moore }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        {{ $motmooresinguliers->appends(request()->except('page'))->links('pagination::bootstrap-4') }}
      </div>
    </div>
  </div>
</div>
@endsection
