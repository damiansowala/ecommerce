<nav class="app-header navbar navbar-expand bg-custome" data-bs-theme="dark">
    <div class="container-fluid">
        <ul class="navbar-nav">

            <li class="nav-item">
                <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
                    <i class="bi bi-list"></i>
                </a>
            </li>


            {{-- <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-plus-square"></i>
                    Utwórz zamówienie
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-plus-square"></i>
                    Nowe zamówienia
                </a>
            </li> --}}

        </ul>




        <ul class="navbar-nav ms-auto">


            <li class="nav-item dropdown">

                <a class="nav-link" data-bs-toggle="dropdown" href="#">
                    <i class="bi bi-bell-fill"></i>

                    <span class="navbar-badge badge text-bg-warning"><i class="bi bi-bell p-1"></i> 15</span>

                    {{-- <span class="navbar-badge badge text-bg-success"><i class="bi bi-bell-fill"></i> 0</span> --}}



                </a>

                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">

                    <span class="dropdown-item dropdown-header">15 powiadomień</span>

                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-envelope me-2"></i> 4 new messages
                        <span class="float-end text-secondary fs-7">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-people-fill me-2"></i> 8 nowych klientów
                        <span class="float-end text-secondary fs-7">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="bi bi-bag-check-fill me-2"></i> 3 nowe wiadomości
                        <span class="float-end text-secondary fs-7">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">
                        See All Notifications
                    </a>
                </div>
            </li>




            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="bi bi-person-circle"></i>
                    <span class="d-none d-md-inline"> {{ Auth::check() ? Auth::user()->name : '' }}</span>

                </a>

                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">


                    <li class="text-center text-bg-primary p-5">
                        <h1> <i class="bi bi-person-circle"></i></h1>
                        <p class="h4">{{ Auth::check() ? Auth::user()->name : '' }}</p>


                        <p><small>Data rejestracji 20/12/2023</small></p>
                    </li>


                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>

                        <a href="{{ route('logout') }}" class="btn btn-default btn-flat float-end" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>






            <li class="nav-item">
                <a class="nav-link" href="#" data-lte-toggle="fullscreen">
                    <i data-lte-icon="maximize" class="bi bi-arrows-fullscreen"></i>
                    <i data-lte-icon="minimize" class="bi bi-fullscreen-exit" style="display: none;"></i>
                </a>
            </li>

        </ul>

    </div>

</nav>
