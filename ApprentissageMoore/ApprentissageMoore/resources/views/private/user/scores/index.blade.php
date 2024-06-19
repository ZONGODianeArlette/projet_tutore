@extends('private.layouts.app')

@section('titre', "Mes scores")

@section('contenu')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 col-md-4 order-1">
            <h3>
                Mes scores
            </h3>
            <div class="d-flex justify-content-end mb-2">
                <a href="{{ route('selection-lesson') }}" class="btn btn-primary text-white mt-2 mt-xl-0 float-left-btn"
                    title="Cliquez ici pour ajouter une nouvelle leçon">Continuer à apprendre</a>
            </div>
            
            <div class="row">
                <div class="col-6 mb-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between flex-sm-row flex-column gap-3">
                                <div class="d-flex flex-sm-column flex-row align-items-start justify-content-between">
                                    <div class="card-title">
                                        <h5 class="text-nowrap mb-2">Leçcons Terminées</h5>
                                    </div>
                                    <div class="mt-sm-auto">
                                        <h3 class="mb-0">{{ $total_lessons_reussies }}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 mb-6">
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

            <div class="row p-3">
                <div class="card">
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead class="table-light">
                                <tr>
                                    <th>Leçons</th>
                                    <th>Points</th>
                                </tr>
                            </thead>

                            <tbody class="table-border-bottom-0">
                                @foreach ($lessons as $lesson)
                                <tr>
                                    <td><a href="{{ route('apprentissage-index', $lesson->id) }}">{{ $lesson->nom }}</a></td>
                                    <td>
                                        <span class="badge bg-label-dark me-1">{{ $lesson->point }}</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    {{ $lessons->links('pagination::bootstrap-4') }}

</div>
@endsection