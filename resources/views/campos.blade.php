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
                    @foreach ($campos as $key => $campo)
                        @if($campo['table'] == $table)
                        <tr>
                            <td>{{ $campo -> field}}</td>
                        </tr>
                        @endif
                    @endforeach
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