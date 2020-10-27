@extends('layouts.app')

@section('content')



<div class="bg-principal py-4 my-3">

    <link rel="stylesheet" href="css/matricula.css">
    <h1 class="display-6 text-dark text-center py-2">¿Aún no tienes plaza? ¡Esta es tu oportunidad, no esperes más que
        te quedas
        sin ella!</h1>
    <div class="container mt-4  p-4 sombra rounded-lg text-dark ajustar">

        <h1 class="pl-2 pb-2 display-6 font-weight-bold text-justify">Solicita tu matrícula</h1>
        <span class="subrayado"></span>


        <form class="row g-3 was-validated mt-3" action="{{ route('matricula.send') }}" method="POST">
            @csrf
            <div class="col-md-5 row ">
                <div class="containerRelative px-0  col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="name" value="{{ old('name') }}"
                        class="form-Dani" id="name" required>
                    <span class="barra  "></span>
                    <label for="name" class="form-label"
                        onclick="document.getElementById('name').focus()">Nombre</label>
                </div>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror



                <div class=" containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="subname" value="{{ old('subname') }}"
                        class="form-Dani" id="subname" required>
                    <span class="barra "></span>
                    <label for="subname" class="form-label"
                        onclick="document.getElementById('subname').focus()">Apellidos</label>
                </div>
                @error('subname')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror



                <div class="containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="email" name="email" value="{{ old('email') }}"
                        class="form-Dani" id="email" required>
                    <span class="barra "></span>
                    <label for="email" class="form-label" onclick="document.getElementById('email').focus()">Correo
                        electrónico</label>
                </div>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror



            </div>
            <div class="col-md-7 pl-4 m-0   ">
                <div class="row justify-content-between">
                    <div class="container  col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="pl-2 my-3">Asignaturas (2 horas)</h3>
                                <span class="subrayado"></span>
                            </div>
                        </div>
                        <ul>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Matemáticas">
                                    Matemáticas</label></input></li>
                            <span class="checkeado"></span>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Física">
                                    Física</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Química">
                                    Química</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Inglés">
                                    Inglés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Francés">
                                    Francés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Lengua y literatura">
                                    Lengua y literatura</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas2[]"
                                        value="Física y química">
                                    Física y química</label></input></li>
                        </ul>
                        @error('horas2')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror



                    </div>
                    <div class="container  col-md-6 ">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="pl-2 my-3">Asignaturas (3 horas)</h3>
                                <span class="subrayado"></span>
                            </div>
                        </div>
                        <ul>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Matemáticas">
                                    Matemáticas</label></input></li>
                            <span class="checkeado"></span>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Física">
                                    Física</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Química">
                                    Química</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Inglés">
                                    Inglés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Francés">
                                    Francés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Lengua y literatura">
                                    Lengua y literatura</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="horas3[]"
                                        value="Física y química">
                                    Física y química</label></input></li>
                        </ul>
                        @error('horas3')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror



                    </div>
                </div>
            </div>

            <div class="pr-3 col-md-12 containerRelative">
                <textarea class="form-Dani col-12" placeholder=" " value="{{ old('mensaje') }}"
                    name="mensaje" id="mensaje" rows="4"></textarea>
                <span class="barra"></span>
                <label for="validationTextarea" onclick="document.getElementById('mensaje').focus()"
                    class="form-label">Mensaje</label>
            </div>

            <div class="col-12">
                <button class="btn btn-success ml-4" type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>
@endsection
