@extends('private.layouts.app')

@section('titre', "Tableau de bord de l'utilisateur")

@section('contenu')

<div class="container-xxl flex-grow-1 container-p-y">
    <h2 class="mb-4">
        Mon tableau de bord
    </h2>

    <div class="row mb-4">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                                <h5 class="text-nowrap mb-2">Leçons En Cours</h5>
                            </div>
                            <div class="mt-sm-auto">
                                <h3 class="mb-0">{{ $total_lessons_en_cours }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                                <h5 class="text-nowrap mb-2">Leçons Reussis</h5>
                            </div>
                            <div class="mt-sm-auto">
                                <h3 class="mb-0">{{ $total_lessons_reussies }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                                <h5 class="text-nowrap mb-2">Leçons Terminées</h5>
                            </div>
                            <div class="mt-sm-auto">
                                <h3 class="mb-0">{{ $total_lessons_reussies }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6 col-md-12 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                        <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                            <div class="card-title">
                                <h5 class="text-nowrap mb-2">Total Points</h5>
                            </div>
                            <div class="mt-sm-auto">
                                <h3 class="mb-0">{{ $total_points }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-lg-4 col-md-12 col-4 mb-4">
            <div class="card p-4">
                <div class="d-flex justify-content-center">

                   <a href="{{ route('selection-lesson') }}" style="font-size: 17px">Selectionner une leçon</a>
               </div>
           </div>
       </div>

        <div class="col-lg-4 col-md-12 col-4 mb-4">
            <div class="card p-4 ">
                <div class="d-flex justify-content-center">
                    <a href="{{ route('mes-lessons') }}" style="font-size: 17px">Mes leçcons</a>
                </div>
            </div>
        </div>

        <div class="col-lg-4 col-md-12 col-4 mb-4">
            <div class="card p-4">
                <div class="d-flex justify-content-center">
                   <a href="{{ route('mes-scores') }}" style="font-size: 17px">Mes scores</a>
               </div>
            </div>
       </div>

    </div>

</div>

@endsection
