@extends('layouts.app')
@section('class','py-0')

@section('content')


<!-- CONTENIDO INICIO -->
@component('components.slider')

@include('layouts.header')

@component('components.text-article')
@slot('title')
Conviértete en un cliente satisfecho
@endslot

@slot('body')
Tenemos en cuenta los objetivos y metas de todos, incluso en
un ambiente de clase grupal.
@endslot

@slot('optional')
Debido a esto, podemos presumir de tener muchos clientes satisfechos,
muchos de los cuales nos han dado grandes alabanzas y también nos han recomendado a familiares y
amigos para su entrenamiento. También puedes convertirte en uno de nuestros clientes satisfechos.
@endslot
@endcomponent

@endcomponent

@include('layouts.card-info-la-academia')
@include('layouts.pricing')
@include('layouts.precio')

@include('layouts.card-info-covid')
<!-- CONTENIDO FINAL -->
@endsection
