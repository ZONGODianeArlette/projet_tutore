@extends('private.layouts.app')

@section('titre', 'Liste des utilisateurs')

@section('contenu')

    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-lg-12 col-md-4 order-1">

                <h2>
                    Gestion des utilisateurs
                </h2>

                <div class="d-flex justify-content-end mb-5">
                  <a href="{{ route('lessons.create') }}" class="btn btn-primary text-white mt-2 mt-xl-0 float-left-btn" title="Cliquez ici pour ajouter une nouvelle Lesson">Ajouter un utilisateur</a>
                </div>
                <div class="row">
                    @if (session('success'))
                              <div class="alert alert-success alert-dismissible fade show" role="alert">
                                  {{ session('success') }}
                                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>
                              @endif

                <div class="col-xl-12" style="margin-top:5vh">

                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs nav-fill" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-justified-home" aria-controls="navs-justified-home"
                                    aria-selected="true">
                                    <i class="tf-icons bx bx-user"></i> Utilisateurs
                                    <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-label-danger"></span>
                                </button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile"
                                    aria-selected="false">
                                    <i class="tf-icons bx bx-user"></i> Administrateurs
                                </button>
                            </li>

                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">
                                <div class="card">

                                    <h5 class="card-header">Listes des utilisateurs</h5>
                                    <div class="card-body">

                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Prénom</th>
                                                        <th>E-mail</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                            <strong>Angular
                                                                Project</strong>
                                                        </td>
                                                        <td>Albert Cook</td>
                                                        <td>Albert Cook</td>

                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React
                                                                Project</strong>
                                                        </td>
                                                        <td>Barry Hunter</td>
                                                        <td>Barry Hunter</td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                                            <strong>VueJs Project</strong>
                                                        </td>
                                                        <td>Trevor Baker</td>
                                                        <td>Trevor Baker</td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                            <strong>Bootstrap
                                                                Project</strong>
                                                        </td>
                                                        <td>Jerry Milton</td>
                                                        <td>Jerry Milton</td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">
                                <div class="card">

                                    <h5 class="card-header">Listes des administrateurs</h5>
                                    <div class="card-body">

                                        <div class="table-responsive text-nowrap">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Nom</th>
                                                        <th>Prénom</th>
                                                        <th>E-mail</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <i class="fab fa-angular fa-lg text-danger me-3"></i>
                                                            <strong>Angular
                                                                Project</strong>
                                                        </td>
                                                        <td>Albert Cook</td>
                                                        <td>Albert Cook</td>

                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fab fa-react fa-lg text-info me-3"></i> <strong>React
                                                                Project</strong>
                                                        </td>
                                                        <td>Barry Hunter</td>
                                                        <td>Barry Hunter</td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td><i class="fab fa-vuejs fa-lg text-success me-3"></i>
                                                            <strong>VueJs Project</strong>
                                                        </td>
                                                        <td>Trevor Baker</td>
                                                        <td>Trevor Baker</td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <i class="fab fa-bootstrap fa-lg text-primary me-3"></i>
                                                            <strong>Bootstrap
                                                                Project</strong>
                                                        </td>
                                                        <td>Jerry Milton</td>
                                                        <td>Jerry Milton</td>


                                                        <td>
                                                            <div class="dropdown">
                                                                <button type="button"
                                                                    class="btn p-0 dropdown-toggle hide-arrow"
                                                                    data-bs-toggle="dropdown">
                                                                    <i class="bx bx-dots-vertical-rounded"></i>
                                                                </button>
                                                                <div class="dropdown-menu">
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                                    <a class="dropdown-item" href="javascript:void(0);"><i
                                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
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
