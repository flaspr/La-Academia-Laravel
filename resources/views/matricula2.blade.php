@extends('layouts.app')

@section('content')
@if(session('matriculaConfirmado'))
    @include('confirmacion' )

@endif


<div class="bg-principal py-3 text-light">
    <link rel="stylesheet" href="css/matricula.css">
    <div class="container my-0  p-4 sombra rounded-lg text-dark ajustar">

        <h1 class="pl-2 pb-2 display-6 font-weight-bold">Solicita tu matrícula</h1>
        <span class="subrayado"></span>


        <form class="row g-3 was-validated mt-3" action="{{ route('matricula.send') }}" method="POST">
            @csrf
            <div class="col-md-5 row ">
                <div class="containerRelative px-0  col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="name" class="form-Dani" id="name" required>
                    <span class="barra  "></span>
                    <label for="name" class="form-label">Nombre</label>
                </div>
                <div class=" containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="subname" class="form-Dani" id="subname" required>
                    <span class="barra "></span>
                    <label for="subname" class="form-label">Apellidos</label>
                </div>

                <div class="containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="email" name="email" class="form-Dani" id="email" required>
                    <span class="barra "></span>
                    <label for="email" class="form-label">Correo electrónico</label>
                </div>

            </div>
            <div class="col-md-7 pl-4 m-0   ">
                <div class="row justify-content-between">
                    <div class="container  col-md-6">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="pl-2 my-3">Asignaturas</h3>
                                <span class="subrayado"></span>
                            </div> 
                        </div>
                        <ul>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Matemáticas</label></input></li>
                            <span class="checkeado" ></span>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Física</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Química</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Inglés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Francés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Lengua y literatura</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="cb-deportes" value="gusta"> Física y química</label></input></li>
                        </ul>
                    </div>
                    <div class="container  col-md-6 ">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="pl-2 my-3">Asignaturas</h3>
                                <span class="subrayado"></span>
                            </div>
                        </div>
                    </div>
                </div>
               
                {{-- <div class="row">
                    <div class="col-6">
                        <h3 class="pl-2 my-3">Asignaturas</h3>
                        <span class="subrayado"></span>
                    </div>
                    <div class="col-6">
                        <h3 class="pl-2 my-3">Asignaturas</h3>
                        <span class="subrayado"></span>
                    </div> 
                </div>
                
                <div class="row px-3 py-4">
                    <div class="col-5 pad col-md-4">
                        <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                    </div>
                    <div class="col-5 pad col-md-4">
                        <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                    </div>
                    <div class="col-5 pad col-md-4">
                        <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                    </div>
                    <div class="col-5 pad col-md-4">
                        <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                    </div>
                    <div class="col-5 pad col-md-4">
                        <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                    </div>
                    <div class="col-5 pad col-md-4">
                        <input type="checkbox" name="cb-deportes" value="gusta"> Deportes</input>
                    </div>
                </div>
                 --}}
            </div>

            <div class="pr-3 col-md-12 containerRelative">
                <textarea class="form-Dani col-12" placeholder=" "  id="mensaje" rows="4"required></textarea>
                <span class="barra"></span>
                <label for="validationTextarea" class="form-label">Mensaje</label>
            </div>

            <div class="col-12">
                <button class="btn btn-success ml-4" type="submit">Enviar</button>
            </div>
        </form>

    </div>
</div>
@endsection