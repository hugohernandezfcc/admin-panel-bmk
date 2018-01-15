@extends('adminlte::page')

@section('title', 'App medica - Menus')

@section('content_header')
    <h1>Admin Menus</h1>
@stop

@section('content')
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Menus
        <small>example menu(notes)</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Example Notes</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
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
                </thead>
                <tbody>
                    @foreach ($table_menus as $table_menu)
                        <tr>
                            <td>{{ $table_menu['text']}}</td>
                            <td>{{ $table_menu['order']}}</td>
                            <td>{{ $table_menu['label']}}</td>
                            <td>{{ $table_menu['icon']}}</td>
                            <td>{{ $table_menu['label_color']}}</td>
                            <td>{{ $table_menu['url']}}</td>
                            <td>{{ $table_menu['to']}}</td>
                            <td>{{ $table_menu['type_item']}}</td>
                            <td>{{ $table_menu['parent']}}</td>
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
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@stop