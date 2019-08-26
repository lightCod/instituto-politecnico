@extends('welcome')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Lista De Cursos
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
                  <th>Curso</th>
                  <th>Duracao</th>
                  <th>Ano</th>
                  <th>Tipo do Curso</th>
                  <th>Pagamento Mensal</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($courses as $course)
                    <tr>
                        <td>{{$course->courseName}}</td>
                        <td>{{$course->duraction}}</td>
                        <td>{{$course->year}}</td>
                        <td>{{$course->course_type}}</td>
                        <td>{{$course->monthly_payment}}</td>
                        <td>
                        <a class="icon" href="{{ route('course.edit', $course->id) }}">
                            <i class="fe fe-edit"></i>
                          </a>
                        </td>
                        <td class="w-1">
                          <form action="{{ route('course.destroy', $course->id) }}" method="post">
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
    {{ $courses->links() }}
@endsection