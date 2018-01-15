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
        <small>advanced tables</small>
      </h1>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>title</th>
                  <th>body</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    @foreach ($notes as $note)
                        <td>{{ $note['title']}}</td>
                        <td>{{ $note['body']}}</td>
                    @endforeach
                </tr>
                <tfoot>
                <tr>
                  <th>title</th>
                  <th>body</th>
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