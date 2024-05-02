@extends('private.layouts.app')

@section('titre', "Detail de la $lesson->nom")

@section('contenu')
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">
                <h2>
                    Detail de la {{ $lesson->nom }}
                </h2>
                <div class="d-flex justify-content-end mb-2">
                    <a href="{{ route('ajout-mot-moore', $lesson->id) }}"
                        class="btn btn-primary text-white mt-2 mt-xl-0 float-left-btn"
                        title="Cliquez ici pour ajouter une nouvelle Lesson">Ajouter un mot mooré</a>
                </div>

                <div class="row">
                    @if (session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                    <div class="card">
                        <h5 class="card-header">Listes des mot moorés</h5>
                        <div class="table-responsive text-nowrap">
                            <div class="row gy-3">
                            <table class="table">
                                <thead class="table-light">
                                    <tr>
                                        <th>Mot Moorés</th>
                                        <th>Mots Moorés Singuliers</th>
                                        <th>Mots Moorés Pluriels</th>
                                    </tr>
                                </thead>
                                <tbody class="table-border-bottom-0">

                                    @foreach ($lesson->motMoores as $motMoore)
                                        <tr>
                                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                <strong>{{ $motMoore->numero }}</strong>
                                            </td>
                                            <td><button class="btn btn-primary" type="button" data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasStart_{{ $motMoore->id }}" aria-controls="offcanvasStart">
                                                    {{ $motMoore->singulier->mot_en_moore }}
                                                </button>
                                                <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasStart_{{ $motMoore->id }}"
                                                    aria-labelledby="offcanvasStartLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 id="offcanvasStartLabel" class="offcanvas-title">
                                                            {{ $motMoore->singulier->mot_en_moore }}
                                                        </h5>
                                                        <button type="button" class="btn-close text-reset"
                                                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                        <p class="text-center">
                                                            Lorem ipsum, or lipsum as it is sometimes
                                                        </p>
                                                        <button type="button"
                                                            class="btn btn-primary mb-2 d-grid w-100">Continue</button>
                                                        <button type="button"
                                                            class="btn btn-outline-secondary d-grid w-100"
                                                            data-bs-dismiss="offcanvas">
                                                            Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td><button class="btn btn-warning" type="button" data-bs-toggle="offcanvas"
                                                    data-bs-target="#offcanvasEnd_{{ $motMoore->id }}" aria-controls="offcanvasEnd">
                                                    {{ $motMoore->pluriel->mot_en_moore }}
                                                </button>
                                                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasEnd_{{ $motMoore->id }}"
                                                    aria-labelledby="offcanvasEndLabel">
                                                    <div class="offcanvas-header">
                                                        <h5 id="offcanvasEndLabel" class="offcanvas-title">{{ $motMoore->pluriel->mot_en_moore }}
                                                        </h5>
                                                        <button type="button" class="btn-close text-reset"
                                                            data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                                    </div>
                                                    <div class="offcanvas-body my-auto mx-0 flex-grow-0">
                                                        <div class="col-md-6 col-lg-4">
                                                            <h6 class="mt-2 text-muted">Kitchen sink</h6>
                                                            <div class="card">
                                                              <img class="card-img-top" src="../assets/img/elements/7.jpg" alt="Card image cap" />
                                                              <div class="card-body">
                                                                <h5 class="card-title">Card title</h5>
                                                                <p class="card-text">Some quick example text to build on the card title.</p>
                                                              </div>
                                                              <ul class="list-group list-group-flush">
                                                                <li class="list-group-item">Cras justo odio</li>
                                                                <li class="list-group-item">Vestibulum at eros</li>
                                                              </ul>
                                                              <div class="card-body">
                                                                <a href="javascript:void(0)" class="card-link">Card link</a>
                                                                <a href="javascript:void(0)" class="card-link">Another link</a>
                                                              </div>
                                                            </div>
                                                          </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
