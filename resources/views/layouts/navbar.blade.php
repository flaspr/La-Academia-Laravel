<nav id="navbar" class="{{ $bg ?? "bg-dark" }} {{ $navbar ?? "navbar-dark" }}
    navbar navbar-responsive navbar-fixed-botom navbar-fixed-sm-top navbar-expand-sm shadow-lg py-3">
    <div class="container">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img id="logo" class="logo-grande" src="{{ asset('images/logo.png') }}" alt="">
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
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matricula') }}">
                        Solicitar Matrícula
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matricula') }}">
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
