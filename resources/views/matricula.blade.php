@extends('layouts.app')

@section('content')
<div class="container py-5">

    <h1 class="display-6 font-weight-bold">Solicita tu matrícula</h1>

    {{--  prueba  --}}
    <form class="row g-3 was-validated" action="{{route('matricula.send')}}" method="POST">
        @csrf
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Nombre</label>
            <input type="text" name="name" class="form-control" id="validationCustom01" required>
            <div class="invalid-feedback">
                Escriba su Nombre
            </div>
            <div class="valid-feedback">
                ¡Todo Correcto!
            </div>
        </div>
        <div class="col-md-4">
            <label for="validationCustom01" class="form-label">Apellidos</label>
            <input type="text" name="subname" class="form-control" id="validationCustom01" required>
            <div class="invalid-feedback">
                Escriba sus Apellidos
            </div>
            <div class="valid-feedback">
                ¡Todo Correcto!
            </div>
        </div>

        <div class="col-md-4">
            <label for="email" class="form-label">Correo electrónico</label>
            <input type="email" name="email" class="form-control" id="email" required>
            <div class="invalid-feedback">
                Escriba su email
            </div>
            <div class="valid-feedback">
                ¡Todo Correcto!
            </div>
        </div>

        <div class="col-md-12">
            <label for="validationTextarea" class="form-label">Mensaje</label>
            <textarea class="form-control " id="validationTextarea" required></textarea>
            <div class="invalid-feedback">
                Escriba su Mensaje
            </div>
            <div class="valid-feedback">
                ¡Todo Correcto!
            </div>
        </div>

        <div class="col-12">
            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>



</div>
@endsection
