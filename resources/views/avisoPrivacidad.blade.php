@extends('adminlte::page')

@section('title', 'App medica - Aviso de Privacidad')

@section('content_header')
    <h1>Aviso de Privacidad</h1>
@stop

@section('content')

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Description</th>
                  <th>Created at</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($statements as $key => $statement)
                        <tr>
                            <td>{{ $statement -> id}}</td>
                            <td>{{ $statement -> description}}</td>
                            <td>{{ $statement -> created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>Description</th>
                  <th>Created at</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
@stop