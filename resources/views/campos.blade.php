@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
            
            @foreach ($tables as $table)
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Field</th>
                </tr>
                </thead>
                <tbody>
                   
                </tbody>
                <tfoot>
                <tr>
                  <th>Field</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
            @endforeach
@stop