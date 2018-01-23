@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
    <h1>{{$variable1}}</h1>
    @foreach ($tablas as $tabla)
        <h2>{{$tabla}}</h2>
        @foreach ($campos as $campo)
            @if($campo['tabla']==$tabla)
              <h2>{{$campo['field']}}</h2>
            @endif
        @endforeach
    @endforeach
@stop