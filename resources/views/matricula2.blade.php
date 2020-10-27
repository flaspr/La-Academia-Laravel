@extends('layouts.app')

@section('content')



<div class="bg-principal py-4 ">
    @if(session('matriculaConfirmado'))
    @include('confirmacion' )
    @endif

    <link rel="stylesheet" href="css/matricula.css">
    <h1 class="text-dark text-center py-2">¿Aún no tienes plaza? ¡Esta es tu oportunidad, no esperes más que te quedas sin ella!</h1>
    <div class="container mt-4  p-4 sombra rounded-lg text-dark ajustar">

        <h1 class="pl-2 pb-2 display-6 font-weight-bold text-justify">Solicita tu matrícula</h1>
        <span class="subrayado"></span>


        <form class="row g-3 was-validated mt-3" action="{{ route('matricula.send') }}" method="POST">
            @csrf
            <div class="col-md-5 row ">
                <div class="containerRelative px-0  col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="nameM" value="{{old('nameM')}}" class="form-Dani" id="nameM" required>
                    <span class="barra  "></span>
                    <label for="nameM" class="form-label" onclick="document.getElementById('nameM').focus()">Nombre</label>
                </div>
                <div class=" containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="text" name="subnameM" value="{{old('subnameM')}}" class="form-Dani" id="subnameM" required>
                    <span class="barra "></span>
                    <label for="subnameM" class="form-label" onclick="document.getElementById('subnameM').focus()">Apellidos</label>
                </div>

                <div class="containerRelative px-0 col-12 col-md-12 my-4">
                    <input placeholder=" " type="email"  name="emailM" value="{{old('emailM')}}" class="form-Dani" id="emailM" required>
                    <span class="barra "></span>
                    <label for="emailM" class="form-label" onclick="document.getElementById('emailM').focus()">Correo electrónico</label>
                </div>

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
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="mat2" value="gusta"> Matemáticas</label></input></li>
                            <span class="checkeado" ></span>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="fis2" value="gusta"> Física</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="qui2" value="gusta"> Química</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="ing2" value="gusta"> Inglés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="fra2" value="gusta"> Francés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="lyt2" value="gusta"> Lengua y literatura</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="fyq2" value="gusta"> Física y química</label></input></li>
                        </ul>
                    </div>
                    <div class="container  col-md-6 ">
                        <div class="row">
                            <div class="col-12">
                                <h3 class="pl-2 my-3">Asignaturas (3 horas)</h3>
                                <span class="subrayado"></span>
                            </div>
                        </div>
                        <ul>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="mat3" value="gusta"> Matemáticas</label></input></li>
                            <span class="checkeado" ></span>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="fis3" value="gusta"> Física</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="qui3" value="gusta"> Química</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="ing3" value="gusta"> Inglés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="fra3" value="gusta"> Francés</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="lyt3" value="gusta"> Lengua y literatura</label></input></li>
                            <li> <label class="checkbox-Dani"><input class="" type="checkbox" name="fyq3" value="gusta"> Física y química</label></input></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="pr-3 col-md-12 containerRelative">
                <textarea class="form-Dani col-12" placeholder=" " value="{{old('mensajeM')}}" name="mensajeM" id="mensajeM" rows="4"required></textarea>
                <span class="barra"></span>
                <label for="validationTextarea" onclick="document.getElementById('mensajeM').focus()" class="form-label">Mensaje</label>
            </div>

            <div class="col-12">
                <button class="btn btn-success ml-4" type="submit">Enviar</button>
            </div>
        </form>

    </div>
</div>
@endsection