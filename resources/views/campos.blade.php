@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
    <h1>{{$variable1}}</h1>
    @foreach ($tables as $table)
        <h1>{{$table}}</h1>
    @endforeach

    @foreach ($campos as $campo)
        <h1>{{$campo}}</h1>
    @endforeach
@stop