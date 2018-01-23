@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
            
            @foreach ($tables as $table)
                <h1>{{table}}</h1>>
            @endforeach
@stop