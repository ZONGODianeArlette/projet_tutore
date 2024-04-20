<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tableauBord') }}">
          <i class="mdi mdi-home menu-icon"></i>
          <span class="menu-title">Tableau de bord</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.list_mot') }}">
          <i class="mdi mdi-application menu-icon"></i>
          <span class="menu-title">Listes des Mots</span>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" href="pages/utilisateurs/utilisateurs.html">
          <i class="mdi mdi-account-multiple menu-icon"></i>
          <span class="menu-title">Utilisateurs</span>
        </a>
      </li> --}}

      <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.list_utilisateur') }}">
          <i class="mdi mdi-equal-box menu-icon"></i>
          <span class="menu-title">Listes des Utilisateurs</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="pages/profil/profil.html">
          <i class="mdi mdi-account-box-outline menu-icon"></i>
          <span class="menu-title">Profil</span>
        </a>
      </li>
    </ul>
  </nav>