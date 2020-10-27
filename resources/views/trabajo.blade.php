@extends('layouts.app')

@section('content')

<div class="bg-principal">
    <div class="text-center">
        <h1 class="display-1">¿Quieres trabajar con nosotros?</h1>
        
        <h4>Contamos con profesores altamente cualificados, con años de experiencia y clases
            con grupos reducidos. </h4>
    </div>
    <form action="{{ route('trabajo.send') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container sombra rounded-lg text-dark ajustar my-3 p-4">
            <div class="py-3">
                <h2>Mándanos tu información</h2>
                <span class="subrayado"></span>
            </div>
            <div class="col-md-12 row ">


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

                <div class="mt-2 pr-3 col-md-12 containerRelative">
                    <textarea class="form-Dani col-12" placeholder=" " value="{{ old('mensaje') }}"
                        name="mensaje" id="mensaje" rows="4"></textarea>
                    <span class="barra"></span>
                    <label for="validationTextarea" onclick="document.getElementById('mensaje').focus()"
                        class="form-label">Mensaje</label>
                </div>
          

                <div class="containerRelative px-0 col-12 col-md-12 my-4">
                    <div class="form-file form-file-lg">
                        <input type="file" name="attached" class="form-file-input" id="customFile" required>
                        <label class="form-file-label" for="customFile">
                            <span class="form-file-text">Currículum en formato PDF</span>
                            <span class="form-file-button">Adjuntar PDF</span>
                        </label>
                    </div>
                </div>
                @error('attached')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror



                <div class="col-12">
                    <button class="btn btn-success ml-4" type="submit">Enviar</button>
                </div>

            </div>
    </form>

</div>

@endsection
