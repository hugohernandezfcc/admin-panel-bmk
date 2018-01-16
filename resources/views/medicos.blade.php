@extends('adminlte::page')

@section('title', 'App medica - Medicos')

@section('content_header')
    <h1>Medicos</h1>
@stop

@section('content')

            <!-- /.box-header -->
            <div class="box-body">
              <table id="example" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>School of Medicine</th>
                  <th>Faculty of Specialization</th>
                  <th>Practise Professional</th>
                  <th>User</th>
                  <th>Professional License</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($medicos as $key => $medico)
                        <tr>
                            <td>{{ $medico -> schoolOfMedicine}}</td>
                            <td>{{ $medico -> facultyOfSpecialization}}</td>
                            <td>{{ $medico -> practiseProfessional}}</td>
                            <td>{{ $medico -> user}}</td>
                            <td>{{ $medico -> professional_license}}</td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>School of Medicine</th>
                  <th>Faculty of Specialization</th>
                  <th>Practise Professional</th>
                  <th>User</th>
                  <th>Professional License</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
@stop