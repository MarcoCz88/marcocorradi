<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow navbarCustom">
    <a class="navbar-brand abril-fatface-regular" href="{{ route('home') }}">Marco Corradi</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto dropboxCustom text-center">
            <!-- Link Principali -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('home') }}">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('whoiam')}}">Chi sono</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('experience')}}">Esperienze</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('projects.index')}}">Progetti</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('contact')}}">Contatti</a>
            </li>
        </ul>
        <div class="auth-links dropboxCustom text-center abril-fatface-regular">
            @guest
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register')}}">Registrati</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login')}}">Login</a>
                </li>
            </ul>
            @else
            <ul class="navbar-nav">
                <li class="nav-item">
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button class="btn text-light fs-5">Logout</button>
                    </form>
                </li>
                @if (Auth::user()->is_admin)
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link btn btn-outline-success btn-sn position-relative">
                        Zona amministratore
                        <span class="position-absolute top-0 start-100 translate-niddle badge rounded-pill bg-danger">
                            {{App\Models\Project::toBeRevisionedCount()}}
                            <span class="visually-hidden">unread message</span>
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('projects.create')}}">Nuovo Progetto</a>
                </li>
                @endif      
            </ul>
            @endguest
        </div>
    </div>
</nav>
