@extends('private.layouts.app')

@section('titre', "Apprentissage de la $lesson->nom ")

@section('contenu')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <h2>
                    Apprentissage de la {{ $lesson->nom }}
                </h2>

                @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (session('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

                @foreach ($lesson->motMoores as $motMoore)
                    <div class="card p-2 mb-4">

                        <div class="row">
                            <div class="col-md-6 mt-4">
                                <div class="card mb-4">
                                    <h5 class="card-header">Apprennez en devinant le pluriel de
                                        <strong>{{ $motMoore->singulier->mot_en_fr }}</strong> en mooré
                                    </h5>
                                    <form action="{{ route('apprentissage-soumission', $motMoore->id) }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="card-body">
                                            <div>
                                                <label for="defaultFormControlInput"
                                                    class="form-label">{{ $motMoore->singulier->mot_en_moore }}</label>
                                                <input type="text" class="form-control" name="pluriel"
                                                    id="defaultFormControlInput" placeholder="Deviner le pluriel"
                                                    aria-describedby="defaultFormControlHelp" />
                                                <div id="defaultFormControlHelp" class="form-text">
                                                    Vous avez la possibilité de faire plusieurs essai.
                                                </div>
                                            </div>

                                            <div class="d-flex justify-content-center mt-2">
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="tf-icons bx bx-check"></i>Soumettre</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 mt-5">
                                <div class="card mb-4">
                                    <h5 class="card-header fs-16"><strong>5 points</strong> à gagner pour ce mot.</h5>
                                    <h5 class="card-header">Status actuel de l'exercice.</h5>
                                    <div class="card-body">
                                        <div class="form-check">
                                            @if (in_array($motMoore->id, $validatedMotMooreIds))
                                                <input class="form-check-input" type="checkbox" value="" checked disabled id="defaultCheck3" />
                                                <label class="form-check-label" for="defaultCheck3"> Terminé </label>
                                            @else
                                                <input class="form-check-input" type="checkbox" value="" disabled id="defaultCheck3" />
                                                <label class="form-check-label" for="defaultCheck3"> En cours </label>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-center gap-2">
                            <a href="#" class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasStart_{{ $motMoore->id }}" aria-controls="offcanvasStart">
                                <i class="tf-icons bx bx-bullseye"></i>Voir le singlier
                            </a>
                            <button class="btn btn-warning" type="button" data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasEnd_{{ $motMoore->id }}" aria-controls="offcanvasEnd">
                                <i class="tf-icons bx bx-question-mark"></i>Aide
                            </button>
                        </div>
                        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart_{{ $motMoore->id }}"
                            aria-labelledby="offcanvasStartLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasStartLabel" class="offcanvas-title">
                                    MOT MOORÉ SINGULIER
                                </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>

                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('asset_prive/assets/img/elements/7.jpg') }}"
                                        alt="Card image cap" />
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">Mot en mooré :
                                            <strong>{{ $motMoore->singulier->mot_en_moore }}
                                            </strong>
                                        </li>
                                        <li class="list-group-item">Mot en français :
                                            <strong>{{ $motMoore->singulier->mot_en_fr }}
                                            </strong>
                                        </li>
                                        <li class="list-group-item">Suffixe :
                                            <strong>{{ $motMoore->singulier->suffixe }}
                                            </strong>
                                        </li>
                                        <li class="list-group-item">Exemple :
                                            <strong>{{ $motMoore->singulier->exemple }}
                                            </strong>
                                        </li>
                                        <li class="list-group-item">Description :
                                            <strong>{{ $motMoore->singulier->description }}
                                            </strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd_{{ $motMoore->id }}"
                            aria-labelledby="offcanvasEndLabel">
                            <div class="offcanvas-header">
                                <h5 id="offcanvasStartLabel" class="offcanvas-title">
                                    MOT MOORÉ PLURIEL
                                </h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                    aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                <div class="card">
                                    <img class="card-img-top" src="{{ asset('asset_prive/assets/img/elements/7.jpg') }}"
                                        alt="Card image cap" />
                                    <ul class="list-group list-group-flush">

                                        <li class="list-group-item">Mot en français :
                                            <strong>{{ $motMoore->pluriel->mot_en_fr }}
                                            </strong>
                                        </li>
                                        <li class="list-group-item">Suffixe :
                                            <strong>{{ $motMoore->pluriel->suffixe }} </strong>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        </div>

    </div>
    </div>
    </div>
@endsection
