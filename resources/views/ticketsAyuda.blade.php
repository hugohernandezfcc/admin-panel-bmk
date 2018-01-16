@extends('adminlte::page')

@section('title', 'App medica - Tickets de Ayuda')

@section('content_header')
    <h1>Tickets de Ayuda</h1>
@stop

@section('content')

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>User</th>
                  <th>User Type</th>
                  <th>Ticket Description</th>
                  <th>User Id</th>
                  <th>Status</th>
                  <th>Subject</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tickets as $key => $ticket)
                        <tr>
                            <td>{{ $ticket -> id}}</td>
                            <td>{{ $ticket -> user}}</td>
                            <td>{{ $ticket -> userType}}</td>
                            <td>{{ $ticket -> ticketDescription}}</td>
                            <td>{{ $ticket -> userId}}</td>
                            <td>{{ $ticket -> status}}</td>
                            <td>{{ $ticket -> subject}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Id</th>
                  <th>User</th>
                  <th>User Type</th>
                  <th>Ticket Description</th>
                  <th>User Id</th>
                  <th>Status</th>
                  <th>Subject</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
@stop