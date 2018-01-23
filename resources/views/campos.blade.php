@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
    @foreach ($tablas as $tabla)
        <h3>Tabla: {{$tabla->table_name}}</h3>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Field</th>
              <th>Data Type</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($campos as $campo)
                    @if($campo['table']==$tabla)
                        <tr>
                            <td>{{ $campo['field']}}</td>
                            <td>{{ $campo['data_type']}}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Field</th>
              <th>Data Type</th>
            </tr>
            </tfoot>
          </table>
        </div>
        </br>
        <!-- /.box-body -->
    @endforeach
@stop