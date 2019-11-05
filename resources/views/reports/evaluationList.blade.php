@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Lista de estudantes
        </h1>
        
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
              <tr>
                  <th colspan="1">
                      <a href="{{ url('report.examlistPdf') }}" class="btn btn-secondary float-right"><i class="fa fa-file-pdf-o"></i> Exportar</a>
                  </th>
                </tr>
                <tr>
                  <th>Nome do Estudante</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
    </div>
@endsection