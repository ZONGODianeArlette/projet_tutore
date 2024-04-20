@extends('admin.layouts.app')

@section('contenu')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
                <h2>Bienvenue OUEDRAOGO,</h2>
                <p class="mb-md-0">dans votre tableau de bord</p>
              </div>
              <div class="d-flex">
                <i class="mdi mdi-home text-muted hover-cursor"></i>
                <p class="text-muted mb-0 hover-cursor">
                  &nbsp;/&nbsp;Tableau de bord&nbsp;
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- fin de bienvenue -->

      <!-- partie de evenement catégorie et utilisateur -->

      <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
         
        </div>
      </div>

      <!-- fin de evenement cathégorie et utilisateur -->

      <!-- évènement récent -->
      <div class="row">
        <div class="col-md-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <p class="card-title">Utilisateurs récemment connecté</p>
              <div class="table-responsive">
                <table id="recent-purchases-listing" class="table">
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>Prénom</th>
                      <th>Numéro de Téléphone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>FESPACO</td>
                      <td>OUAGADOUGOU</td>
                      <td>10/02/2023</td>
                      <td>
                        {{-- <a href="" type="btn btn-control" ></a> --}}
                        <button class="btn btn-control bg-danger">Suprimer </button>
                      
                      
                        <button class="btn btn-control bg-warning">Mettre à jour </button>
                      </td>
                      </td>
                    </tr>
                    <tr>
                      <td>NAK</td>
                      <td>KOUDOUGOU</td>
                      <td>1/12/2023</td>
                      <td>
                        {{-- <a href="" type="btn btn-control" ></a> --}}
                        <button class="btn btn-control bg-danger">Suprimer </button>
                      
                      
                        <button class="btn btn-control bg-warning">Mettre à jour </button>
                      </td>
                    </tr>
                    <tr>
                      <td>SIAO</td>
                      <td>OUAGADOUGOU</td>
                      <td>3/02/2023</td>
                      <td>
                        {{-- <a href="" type="btn btn-control" ></a> --}}
                        <button class="btn btn-control bg-danger">Suprimer </button>
                      
                      
                        <button class="btn btn-control bg-warning">Mettre à jour </button>
                      </td>
                    </tr>
                    <tr>
                      <td>FESTIGRILLE</td>
                      <td>OUAGADOUGOU</td>
                      <td>10/02/2023</td>
                      <td>
                        {{-- <a href="" type="btn btn-control" ></a> --}}
                        <button class="btn btn-control bg-danger">Suprimer </button>
                      
                      
                        <button class="btn btn-control bg-warning">Mettre à jour </button>
                      </td>
                    </tr>
                    <tr>
                      <td>FETE de la MUSIC</td>
                      <td>OUAGADOUGOU</td>
                      <td>10/02/2023</td>
                      <td>
                        {{-- <a href="" type="btn btn-control" ></a> --}}
                        <button class="btn btn-control bg-danger">Suprimer </button>
                      
                      
                        <button class="btn btn-control bg-warning">Mettre à jour </button>
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
    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div
        class="d-sm-flex justify-content-center justify-content-sm-between"
      >
        <span
          class="text-muted text-center text-sm-left d-block d-sm-inline-block"
          >Copyright ©
          <a href="https://www.bootstrapdash.com/" target="_blank"
            >bootstrapdash.com </a
          >2021</span
        >
        <span
          class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"
          >Only the best
          <a href="https://www.bootstrapdash.com/" target="_blank">
            Bootstrap dashboard
          </a>
          templates</span
        >
      </div>
    </footer>
    <!-- partial -->
</div>


 

@endsection