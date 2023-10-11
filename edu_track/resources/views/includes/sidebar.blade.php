<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>
                <li class="">
                    <a href="{{route('admin.dashboard')}}" class="">
                        <span data-feather="home" class="nav-icon"></span>
                        <span class="menu-text">Tableau de bord</span>
                    </a>
                </li>

                <li class="menu-title m-top-30">
                    <span>Applications</span>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <span data-feather="mail" class="nav-icon"></span>
                        <span class="menu-text">Email</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a class="" href="inbox.html">Inbox</a>
                        </li>
                        <li>
                            <a class="" href="read-email.html">Read
                                Email</a>
                        </li>
                    </ul>
                </li>

                <li class="menu-title m-top-30">
                    <span>Pages</span>
                </li>


               <li class="has-child">
                    <a href="#" class="{{request()->is('Administration/ajout-enseignant') ? 'active' : '' }} {{request()->is('Administration/liste-enseignant') ? 'active' : '' }}">
                        <span data-feather="image" class="nav-icon"></span>
                        <span class="menu-text">Gestion enseignant</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('enseignant.ajoute')}}" class="{{request()->is('Administration/ajout-enseignant') ? 'active' : '' }}">Ajouter enseignant</a>
                        </li>
                        <li>
                            <a href="{{route('enseignant.liste')}}" class="{{request()->is('Administration/liste-enseignant') ? 'active' : '' }}">consulter liste des enseignants<span class="badge badge-success menuItem">New</span></a>
                        </li>

                    </ul>
                </li>
                  <li class="has-child">
                    <a href="#" class="{{request()->is('Administration/liste-attente-etudiant') ? 'active' : '' }} {{request()->is('Administration/etudiant-accepte') ? 'active' : '' }}">
                        <span data-feather="image" class="nav-icon"></span>
                        <span class="menu-text">Gestion etudiants</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>

                        <li>
                            <a href="{{route('liste-attente-etudiant')}}" class="{{request()->is('Administration/liste-attente-etudiant') ? 'active' : '' }}">liste d'attente des etudiants <span class="badge badge-success menuItem">New</span></a>
                        </li>
                        <li >
                            <a href="{{route('etudiant.accepte')}}" class="{{request()->is('Administration/etudiant-accepte') ? 'active' : '' }}">Liste des etudiants accepté</a>
                        </li>

                    </ul>
                </li>

                               <li>
                                   <a href="{{route('departement.liste')}}" class="{{request()->is('Administration/liste-departement') ? 'active' : '' }}">
                                       <span data-feather="book" class="nav-icon"></span>
                                       <span class="menu-text">Departements</span>

                                   </a>
                             </li>

                <li class="">
                    <a href="{{route('classes.liste')}}" class="{{request()->is('Administration/liste-classes') ? 'active' : '' }}">
                        <span data-feather="book" class="nav-icon"></span>
                        <span class="menu-text">Classes</span>

                    </a>
                </li>
                             <!--

                               <li>
                                   <a href="login.html" class="">
                                       <span data-feather="user" class="nav-icon"></span>
                                       <span class="menu-text">Log In</span>
                                   </a>
                               </li>
                               <li>
                                   <a href="sign-up.html" class="">
                                       <span data-feather="user-plus" class="nav-icon"></span>
                                       <span class="menu-text">Sign Up</span>
                                   </a>
                               </li>-->
            </ul>
        </div>
    </div>
</aside>
