<nav
    class="navbar navbar-responsive navbar-fixed-botom navbar-fixed-sm-top navbar-dark  navbar-expand-sm bg-principal  shadow-lg py-1">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('storage/images/logo.png') }}" width="" height="35px" alt="">
            <span class="d-none d-sm-inline font-weight-lighter">
                {{ config('app.name', 'La Academia') }}
            </span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto align-items-center">
                <!-- Authentication Links -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matricula') }}">
                        Solicitar Matrícula
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contacto') }}">
                        Contacto
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="moodle">
                        <i class="fas fa-graduation-cap fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>
