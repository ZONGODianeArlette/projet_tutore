@extends('private.layouts.app')

@section('titre', 'Tableau de bord')

@section('contenu')


<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
      <div class="col-lg-12 col-md-4 order-1">
        <div class="row">
          <div class="col-lg-4 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="{{ asset('asset_prive/assets/img/icons/unicons/chart-success.png') }}"
                      alt="chart success"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt3"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span class="fw-semibold d-block mb-1">Nombres d'utilisateurs</span>
                <h3 class="card-title mb-2">$12,628</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +72.80%</small>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-12 col-6 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="card-title d-flex align-items-start justify-content-between">
                  <div class="avatar flex-shrink-0">
                    <img
                      src="{{ asset('asset_prive/assets/img/icons/unicons/wallet-info.png') }}"
                      alt="Credit Card"
                      class="rounded"
                    />
                  </div>
                  <div class="dropdown">
                    <button
                      class="btn p-0"
                      type="button"
                      id="cardOpt6"
                      data-bs-toggle="dropdown"
                      aria-haspopup="true"
                      aria-expanded="false"
                    >
                      <i class="bx bx-dots-vertical-rounded"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt6">
                      <a class="dropdown-item" href="javascript:void(0);">View More</a>
                      <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                    </div>
                  </div>
                </div>
                <span>Nombres de mots</span>
                <h3 class="card-title text-nowrap mb-1">$4,679</h3>
                <small class="text-success fw-semibold"><i class="bx bx-up-arrow-alt"></i> +28.42%</small>
              </div>
            </div>
          </div>
            <div class="col-lg-4 mb-4">
              <div class="card">
                <div class="card-body">
                  <div class="card-title d-flex align-items-start justify-content-between">
                    <div class="avatar flex-shrink-0">
                      <img src="{{ asset('asset_prive/assets/img/icons/unicons/paypal.png') }}" alt="Credit Card" class="rounded" />
                    </div>
                    <div class="dropdown">
                      <button
                        class="btn p-0"
                        type="button"
                        id="cardOpt4"
                        data-bs-toggle="dropdown"
                        aria-haspopup="true"
                        aria-expanded="false"
                      >
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                        <a class="dropdown-item" href="javascript:void(0);">View More</a>
                        <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                      </div>
                    </div>
                  </div>
                  <span class="d-block mb-1">Payments</span>
                  <h3 class="card-title text-nowrap mb-2">$2,456</h3>
                  <small class="text-danger fw-semibold"><i class="bx bx-down-arrow-alt"></i> -14.82%</small>
                </div>
            </div>
        </div>
      </div>
      <!-- Total Revenue -->
      
      <!--/ Total Revenue -->
      
         
          <!-- </div>
<div class="row"> -->
         
        </div>
      </div>
    </div>
   
</div>
    
@endsection