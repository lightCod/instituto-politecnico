@extends('layout.app')

@section('content')
<div class="page-header">
  <h1 class="page-title">
      Curso de {{$course->courseName}}
  </h1>
  </div>
  @if ($msg == 'success')
      <div class="alert alert-success" role="alert">
          Estudante removido com sucesso!!
      </div>
      @elseif ($msg == 'error')
        <div class="alert alert-danger" role="alert">
          N&atilde;o &eacute; possivel remover o estudante
        </div>      
      @endif

      <div class="table-responsive">
          <table class="table card-table table-striped table-vcenter">
            <thead>
              <tr>
                <th colspan="11">
                    <a href="{{ route('createstudent') }}?id={{$course_id}}" class="btn btn-secondary"><i class="fa fa-plus"></i> Novo Estudante</a>
                </th>
                <th colspan="10">
                <div class="col-lg-6 ml-auto">
                <form class="input-icon my-3 my-lg-0" method="post" action="{{ route('search.students') }}">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{$course_id}}">
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
                <th colspan="3">
                      <a href="{{ url('students.report') }}?id={{$course_id}}" class="btn btn-secondary float-right"><i class="fa fa-file-pdf-o"></i> Exportar</a>
                  </th>
              </tr>
              <tr>
                <th>Numero</th>
                <th>Nome</th>
                <th>Nivel</th>
                <th>Contacto</th>
                <th>Genero</th>
                <th>Bolsista</th>
                <th>Tipo de bolsa</th>
                <th>Escola</th>
                <th>Pagamento</th>
                <th>Fundo</th>
                <th>Encarregado</th>
                <th>Contacto Enc</th>
                <th>Doc</th>
                <th>Num Doc</th>
                <th>Provenien&ccedil;a</th>
                <th>Endere&ccedil;o</th>
                <th>Termino Ens</th>
                <th>Data Nasc</th>
                <th>Cuidado Esp</th>
                <th>Ativo?</th>
                <th></th>
                @if(Auth::user()->user_type == 'Administrador')
                  <th></th>
                  <th></th>
                @endif
              </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                  <tr>
                      <td>{{$student->num_student}}</td>
                      <td>{{$student->name}}</td>
                      <td>{{$student->level}}</td>
                      <td>{{$student->contacto}}</td>
                      <td>
                        @if ($student->gender == 'F') Femenino
                        @else Masculino
                        @endif
                      </td>
                      <td>
                        @if ($student->scholarship == 1) Sim
                        @else N&atilde;o    
                        @endif
                      </td>
                      <td>{{$student->scholarship_type}}</td>
                      <td>{{$student->last_school}}</td>
                      <td>{{$student->how_to_pay}}</td>
                      <td>{{$student->funding_source}}</td>
                      <td>{{$student->name_of_carer}}</td>
                      <td>{{$student->contact_of_carer}}</td>
                      <td>{{$student->doc}}</td>
                      <td>{{$student->doc_number}}</td>
                      <td>{{$student->provenance}}</td>
                      <td>{{$student->address}}</td>
                      <td>{{$student->finish_year}}</td>
                      <td>{{$student->date_birth}}</td>
                      <td>{{$student->need_care}}</td>
                      @if($student->active == 1)
                        <td>Sim</td>
                      @else 
                        <td>N&atilde;o</td>
                      @endif  
                      <td class="text-center">
                        <div class="item-action dropdown">
                          <a href="javascript:void(0)" data-toggle="dropdown" class="icon">Gerir<i class="fe fe-more-vertical"></i></a>
                          <div class="dropdown-menu dropdown-menu-right">
                          <a href="{{ route('createdebit') }}?id={{$student->id}}" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Emitir nota de debito </a>
                          <a href="{{ route('createcredit') }}?id={{$student->id}}" class="dropdown-item"><i class="dropdown-icon fa fa-money"></i> Emitir nota de credito </a>
                          <a href="{{ route('open.changeCourse') }}?student_id={{$student->id}}&course_id={{$course->id}}" class="dropdown-item"><i class="dropdown-icon fe fe-grid"></i> Mudar de curso </a>
                          <a href="{{ route('report.studentaccount') }}?id={{$student->id}}" class="dropdown-item"><i class="dropdown-icon fe fe-grid"></i> Extrato </a>
                          </div>
                        </div>
                      </td>
                      @if(Auth::user()->user_type == 'Administrador')
                        <td>
                          <a class="icon" href="{{ route('student.edit') }}?id={{$student->id}}">
                            <i class="fe fe-edit"></i>
                          </a>
                        </td>
                        <td class="w-1">
                          <form action="{{ route('student.destroy') }}" method="post">
                              {!! csrf_field() !!}
                              <input type="hidden" name="id" value="{{$student->id}}" />
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