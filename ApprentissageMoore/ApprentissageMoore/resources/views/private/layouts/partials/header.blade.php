<nav
    class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"id="layout-navbar">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        @if (request()->route()->getName() == 'users.index')
            <div class="navbar-nav align-items-center">
                <form action="" method="get" class="w-100">
                    <div class="nav-item d-flex align-items-center">
                        <i class="bx bx-search fs-4 lh-0"></i>
                        <input type="text" name="recherche_utilisateur" class="form-control border-0 shadow-none"
                            placeholder="Recherche un utilisateur..." aria-label="Rechercher un utilisateur..." />
                    </div>
                </form>
            </div>
        @endif

        @if (request()->route()->getName() == 'lessons.index')
            <div class="navbar-nav align-items-center">
                <form action="" method="get" class="w-100">
                    <div class="nav-item d-flex align-items-center">
                        <i class="bx bx-search fs-4 lh-0"></i>
                        <input type="text" name="recherche_lessons_admin" class="form-control border-0 shadow-none"
                            placeholder="Rechercher une leçon..." aria-label="Rechercher une leçon..." />
                    </div>
                </form>
            </div>
        @endif

        @if (request()->route()->getName() == 'selection-lesson')
        <div class="navbar-nav align-items-center">
            <form action="" method="get" class="w-100">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" name="recherche_lessons_user" class="form-control border-0 shadow-none"
                        placeholder="Rechercher une leçon..." aria-label="Rechercher une leçon..." />
                </div>
            </form>
        </div>
    @endif

    @if (request()->route()->getName() == 'mes-lessons')
        <div class="navbar-nav align-items-center">
            <form action="" method="get" class="w-100">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input type="text" name="recherche_lessons_user_apprentissage" class="form-control border-0 shadow-none"
                        placeholder="Rechercher une leçon..." aria-label="Rechercher une leçon..." />
                </div>
            </form>
        </div>
    @endif

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- Place this tag where you want the button to render. -->

            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        @if (auth()->user()->profile_image == '')
                            <img src="{{ asset('asset_prive/assets/img/avatars/11.jpg') }}" alt
                                class="w-px-40 h-auto rounded-circle" />
                        @else
                            <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt
                                class="w-px-40 h-auto rounded-circle" />
                        @endif

                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                  <div class="avatar avatar-online">
                                    @if (auth()->user()->profile_image == '')
                                        <img src="{{ asset('asset_prive/assets/img/avatars/11.jpg') }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    @else
                                        <img src="{{ asset('storage/' . auth()->user()->profile_image) }}" alt
                                            class="w-px-40 h-auto rounded-circle" />
                                    @endif
            
                                </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ auth()->user()->nom_prenom }}</span>
                                    @if (auth()->user()->role === 'admin')
                                        <small class="text-muted">Administrateur</small>
                                    @else
                                        <small class="text-muted">Utilisateur</small>
                                    @endif
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('private.admin.profil') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">Mon Profil</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" style="cursor:pointer"
                            onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                            <i class="bx bx-power-off me-2"></i>
                            <span class="align-middle">Se deconnecter</span>
                        </a>

                        <form id="logout-form" action="{{ route('deconnexion') }}" method="POST">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>

    </div>

</nav>
