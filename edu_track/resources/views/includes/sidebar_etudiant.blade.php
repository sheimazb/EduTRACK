<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

<aside class="sidebar-wrapper">
    <div class="sidebar sidebar-collapse" id="sidebar">
        <div class="sidebar__menu-group">
            <ul class="sidebar_nav">
                <li class="menu-title">
                    <span>Main menu</span>
                </li>
                <li class="">
                    <a href="" class="">
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


                <li class="">
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-layers nav-icon"><polygon points="12 2 2 7 12 12 22 7 12 2"></polygon><polyline points="2 17 12 22 22 17"></polyline><polyline points="2 12 12 17 22 12"></polyline></svg><span>
                        <span class="menu-text">Agenda</span>
                        </span>
                    </a>
                </li>
                <li class="has-child">
                    <a href="#" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-book-open nav-icon"><path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path><path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path></svg>
                        <span class="menu-text">Mes cours</span>
                        <span class="toggle-icon"></span>
                    </a>
                    <ul>
                        <li>
                            <a href="{{route('etudiant.cours')}}" class="">Liste de cours <span class="badge badge-success menuItem">New</span></a>
                        </li>
                        <li>
                            <a href="" class="">Ajouter un cours </a>
                        </li>
                    </ul>
                </li>

                <li class="">
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check nav-icon"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                        <span class="menu-text">Mes TD</span>
                    </a>
                </li>
                <li class="">
                    <a href="" class="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check nav-icon"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                        <span class="menu-text">Cours Archivés</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</aside>
