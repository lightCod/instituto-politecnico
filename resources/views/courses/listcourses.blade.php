@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Lista De Cursos
        </h1>
    </div>
    @if ($msg == 'success')
            <div class="alert alert-success" role="alert">
                Curso removido com sucesso!!
            </div>
            @elseif ($msg == 'error')
              <div class="alert alert-danger" role="alert">
                N&atilde;o &eacute; possivel remover o curso existe estudantes associado a ele!
              </div>       
          @endif    
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th>
                      <a href="{{ route('createcourse') }}" class="btn btn-secondary"><i class="fa fa-plus"></i> Novo Curso</a>
                  </th>
                  <th colspan="6">
                      <div class="col-lg-6 ml-auto">
                        <form class="input-icon my-3 my-lg-0" method="post" action="{{ route('search.courses') }}">
                        {!! csrf_field() !!}
                        <input type="hidden" name="course_type" value="{{$course_type}}">
                          <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search&hellip;" tabindex="1">
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit">
                                <i class="fe fe-search"></i>
                              </button>
                            </div>
                          </div>
                        </form>
                      </div>
                  </th>
                  <th>
                      <a href="{{ url('courses.report') }}?course_type={{$course_type}}" class="btn btn-secondary float-right"><i class="fa fa-file-pdf-o"></i> Exportar</a>
                  </th>
                </tr>
                <tr>
                  <th>Curso</th>
                  <th>Duracao</th>
                  <th>Ano</th>
                  <th>Tipo do Curso</th>
                  <th>Pagamento Mensal</th>
                  <th></th>
                  @if(Auth::user()->user_type == 'Administrador')
                    <th></th>
                    <th></th>
                  @endif
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
                        <td class="text-right">
                          <div class="item-action dropdown">
                          <a href="javascript:void(0)" data-toggle="dropdown" class="icon">Gerir<i class="fe fe-more-vertical"></i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <a href="{{ url('students') }}?id={{$course->id}}" class="dropdown-item"><i class="dropdown-icon fa fa-list-alt"></i>Lista de Estudantes</a>
                              <a href="{{ url('report.examlist') }}?id={{$course->id}}" class="dropdown-item"><i class="dropdown-icon fa fa-list"></i> Emitir lista de avaliacoes </a>
                            </div>  
                          </div>  
                        </td>
                        @if(Auth::user()->user_type == 'Administrador')
                        <td>
                          <a class="icon" href="{{ url('course.edit') }}?id={{$course->id}}">
                            <i class="fe fe-edit"></i>
                          </a>
                          </td>
                          <td class="w-1">
                            <form action="{{ route('course.destroy' ) }}" method="post">
                              {!! csrf_field() !!}
                              <input type="hidden" name="id" value="{{$course->id}}" />
                              <button class="icon" type="submit"><i class="fe fe-trash"></i></button>
                            </form>
                          </td>
                        @endif
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
@endsection