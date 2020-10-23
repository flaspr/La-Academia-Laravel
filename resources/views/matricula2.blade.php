@extends('layouts.app')

@section('content')
@if(session('matriculaConfirmado'))
    @include('confirmacion' )

@endif
<link rel="stylesheet" href="css/matricula.css">

<div class="bg-principal my-3 py-5 text-light">
    
    <div class="container my-0 my-sm-5 p-4 sombra rounded-lg text-dark ajustar">

        <h1 class="pb-2 display-6 font-weight-bold">Solicita tu matrícula</h1>
        <form class="row g-3 was-validated mt-3" action="{{ route('matricula.send') }}" method="POST">
            @csrf
            <div class="col-md-5 row ">
                <div class="containerRelative px-0  col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="name" class="form-Dani" id="validationCustom01" required>
                    <span class="barra  "></span>
                    <label for="validationCustom01" class="form-label">Nombre</label>
                </div>
                <div class=" containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="subname" class="form-Dani" id="validationCustom01" required>
                    <span class="barra "></span>
                    <label for="validationCustom01" class="form-label">Apellidos</label>
                </div>

                <div class="containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="email" name="email" class="form-Dani" id="email" required>
                    <span class="barra "></span>
                    <label for="email" class="form-label">Correo electrónico</label>
                </div>

            </div>
            <div class="col-md-7 ml-auto row container-xl">
                <div class="col-12 text-center">
                    <h3>Asignaturas</h3>
                </div>
                <div class="col-6 col-md-4">
                    <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                </div>
                <div class="col-6  col-md-4">
                    <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                </div>
                <div class="col-6  col-md-4">
                    <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                </div>
                <div class="col-6  col-md-4">
                    <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                </div>
                <div class="col-6  col-md-4">
                    <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                </div>
                <div class="col-6  col-md-4">
                    <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                </div>
            </div>

            <div class="px-0 col-md-12 containerRelative">
                <textarea class="form-Dani col-10" placeholder=" "  id="validationTextarea" rows="4"required></textarea>
                <span class="barra "></span>
                <label for="validationTextarea" class="form-label">Mensaje</label>
            </div>

            <div class="col-12">
                <button class="btn btn-success destello" type="submit">Enviar</button>
            </div>
        </form>

    </div>
</div>
@endsection