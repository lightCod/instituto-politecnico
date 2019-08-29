@extends('welcome')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Curso de {{$course->courseName}} de {{$course->year}}
        </h1>
        @if ($msg == 'success')
            <div class="alert alert-success" role="alert">
                Curso removido com sucesso!!
            </div>
            @elseif ($msg == 'error')
              <div class="alert alert-danger" role="alert">
                N&atilde;o &eacute; possivel remover o curso existe estudantes associado a ele!
              </div>
            @else
                
          @endif
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th colspan="8">
                  <a href="{{ route('createstudent') }}" class="btn btn-secondary">Novo Estudante</a>
                  </th>
                </tr>
                <tr>
                  <th>Nome</th>
                  <th>Nivel</th>
                  <th>Contacto</th>
                  <th>Bolsista</th>
                  <th>Tipo de bolsa</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($students as $student)
                    <tr>
                        <td>{{$student->name}}</td>
                        <td>{{$student->level}}</td>
                        <td>{{$student->contacto}}</td>
                        <td>{{$student->scholarship}}</td>
                        <td>{{$student->scholarship_type}}</td>
                        <td class="text-right">
                          <a href="{{ route('students', $student->id) }}" class="btn btn-secondary btn-sm">Gerir</a>
                        </td>
                        <td>
                        <a class="icon" href="{{ route('student.edit', $student->id) }}">
                            <i class="fe fe-edit"></i>
                          </a>
                        </td>
                        <td class="w-1">
                          <form action="{{ route('student.destroy', $student->id) }}" method="post">
                              {!! csrf_field() !!}
                              <button class="icon" type="submit"><i class="fe fe-trash"></i></button>
                          </form>
                        </td>
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
    </div>
    {{ $students->links() }}
@endsection