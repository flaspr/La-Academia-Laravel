@extends('layouts.app')

@section('content')
@if (session('matriculaConfirmado'))
@include('confirmacion' )

@endif


<div class="bg-principal py-5 text-light">
    <div class="container my-5 px-3 border">

        <h1 class="display-6 font-weight-bold">Solicita tu matrícula</h1>
        <form class="row g-3 was-validated mt-3" action="{{route('matricula.send')}}" method="POST">
            @csrf
            <div class="col-md-5 row ">
                <div class="px-0 pr-2 col-12 col-md-6 mb-2">
                    <label for="validationCustom01" class="form-label">Nombre</label>
                    <input type="text" name="name" class="form-control" id="validationCustom01" required>
                </div>
                <div class="px-0 col-12 col-md-6 mb-2">
                    <label for="validationCustom01" class="form-label">Apellidos</label>
                    <input type="text" name="subname" class="form-control" id="validationCustom01" required>
                </div>

                <div class="px-0 col-12 col-md-12 mb-2">
                    <label for="email" class="form-label">Correo electrónico</label>
                    <input type="email" name="email" class="form-control" id="email" required>
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

            <div class="px-0 col-md-12">
                <label for="validationTextarea" class="form-label">Mensaje</label>
                <textarea class="form-control " id="validationTextarea" required></textarea>
            </div>

            <div class="col-12">
                <button class="btn btn-success destello" type="submit">Enviar</button>
            </div>
        </form>

    </div>
</div>
@endsection
