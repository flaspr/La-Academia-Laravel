@extends('layouts.app')

@section('content')

<div class="bg-principal">
    <div class="text-center">
        <h1 class="display-1">¿Quieres trabajar con nosotros?</h1>
        <h4>Contamos con profesores altamente cualificados, con años de experiencia y clases
        con grupos reducidos. </h4>
    </div>
   <form action="{{route('trabajo.send')}}" method="POST">
       @csrf
    <div class="container sombra rounded-lg text-dark ajustar my-3 p-4">
        <div class="py-3">
            <h2>Mándanos tu información</h2>
            <span class="subrayado"></span>
        </div>
        <div class="col-md-12 row ">
            <div class="containerRelative px-0  col-12 col-md-12 my-4">
                <input placeholder=" " type="text" name="nameT" value="{{old('nameT')}}" class="form-Dani" id="nameT" required>
                <span class="barra  "></span>
                <label for="nameT" class="form-label" onclick="document.getElementById('nameT').focus()">Nombre</label>
            </div>
            <div class=" containerRelative px-0 col-12 col-md-12 my-4">
                <input placeholder=" " type="text" name="subnameT" value="{{old('subnameT')}}" class="form-Dani" id="subnameT" required>
                <span class="barra "></span>
                <label for="subnameT" class="form-label" onclick="document.getElementById('subnameT').focus()">Apellidos</label>
            </div>

            <div class="containerRelative px-0 col-12 col-md-12 my-4">
                <input placeholder=" " type="email"  name="emailT" value="{{old('emailT')}}" class="form-Dani" id="emailT" required>
                <span class="barra "></span>
                <label for="emailT" class="form-label" onclick="document.getElementById('emailT').focus()">Correo electrónico</label>
            </div>
        
</div>
   </form>
       
</div>
    
@endsection