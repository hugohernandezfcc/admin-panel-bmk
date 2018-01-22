@extends('adminlte::page')

@section('title', 'App medica - Campos')

@section('content_header')
    <h1>Campos</h1>
@stop

@section('content')
            
            @foreach ($tables as $key => $table)
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped" title="$table">
                <thead>
                <tr>
                  <th>Field</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($campos as $key => $campo)
                        <tr>
                            <td>{{ $campo -> field}}</td>
                        </tr>
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