@extends('adminlte::page')

@section('title', 'App medica - Menus')

@section('content_header')
    <h1>Menus</h1>
@stop

@section('content')

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Text</th>
                  <th>Order</th>
                  <th>Label</th>
                  <th>Icon </th>
                  <th>Label Color</th>
                  <th>URL</th>
                  <th>To</th>
                  <th>Type Item</th>
                  <th>Parent</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($menus as $key => $menu)
                        <tr>
                            <td>{{ $menu -> text}}</td>
                            <td>{{ $menu -> order}}</td>
                            <td>{{ $menu -> label}}</td>
                            <td>{{ $menu -> icon}}</td>
                            <td>{{ $menu -> label_color}}</td>
                            <td>{{ $menu -> url}}</td>
                            <td>{{ $menu -> to}}</td>
                            <td>{{ $menu -> typeitem}}</td>
                            <td>{{ $menu -> parent}}</td>
                        </tr>
                    @endforeach
                <tfoot>
               <tr>
                  <th>Text</th>
                  <th>Order</th>
                  <th>Label</th>
                  <th>Icon</th>
                  <th>Label Color</th>
                  <th>URL</th>
                  <th>To</th>
                  <th>Type Item</th>
                  <th>Parent</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
@stop