@extends('layouts.app')

@section('class','py-0')


@section('content')

@include('layouts.header')

<div class="">

    @include('layouts.card-info-covid')

    @include('layouts.text1',[
    'title'=>
    'Conviértete en un cliente satisfecho'
    ,
    'text'
    =>
    'Tenemos en cuenta los objetivos y metas de todos, incluso en
    un ambiente de clase grupal.',
    'text2'
    =>
    'Debido a esto, podemos presumir de tener muchos clientes satisfechos,
    muchos de los cuales nos han dado grandes alabanzas y también nos han recomendado a familiares y
    amigos para su entrenamiento. También puedes convertirte en uno de nuestros clientes satisfechos.'
    ])
    @include('layouts.pricing')


    @include('layouts.contact')

    @include('layouts.map')

    @include('layouts.social')

</div>

@endsection
