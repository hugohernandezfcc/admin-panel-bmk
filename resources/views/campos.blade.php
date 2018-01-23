@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
    <h1>{{$variable1}}</h1>
    @foreach ($tablas as $tabla)
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example" class="table table-bordered table-striped">
            <thead title="$tabla">
            <tr>
              <th>Fields</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($campos as $campo)
                    @if($campo['table']==$tabla)
                        <tr>
                            <td>{{ $campo['field']}}</td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
            <tfoot>
            <tr>
              <th>Fields</th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
    @endforeach
@stop