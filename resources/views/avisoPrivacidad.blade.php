@extends('adminlte::page')

@section('title', 'App medica - Menus')

@section('content_header')
    <h1>Admin Menus</h1>
@stop

@section('content')

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>description</th>
                  <th>created_at</th>
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
                  <th>id</th>
                  <th>description</th>
                  <th>created_at</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
@stop