@extends('layout.app')

@section('content')
<form action="{{ route('course.update' ) }}" method="post" class="card">
    {!! csrf_field() !!}
      <input type="hidden" name="id" value="{{$course->id}}">
      <div class="card-header">
        <h3 class="card-title">Atualisar dados do curso</h3>
      </div>
      <div class="card-body">
            @if ($msg == 'success')
            <div class="alert alert-success" role="alert">
                O curso foi atualisado com sucesso!
            </div>
            @elseif ($msg == 'error')
              <div class="alert alert-danger" role="alert">
                  Houve um erro ao tentar atualisar o curo!
              </div>      
          @endif
        <div class="row">
          <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
              <label class="form-label">Nome do curso</label>
            <input type="text" class="form-control" name="coursename" value="{{ $course->courseName }}" placeholder="" readonly="readonly">
            </div>
      </div>
      <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Dura&ccedil;&atilde;o</label>
          <input type="text" class="form-control" name="duration" value="{{ $course->duraction }}" placeholder="Dura&ccedil;&atilde;o..">
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Ano Corrente</label>
          <input type="number" class="form-control" name="year" value="{{ $course->year }}" placeholder="Ano..">
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
              <label class="form-label">Tipo de Curso</label>
              <select class="form-control custom-select" name="course_name">
                  <option value="{{ $course->course_type }}" selected="selected">{{ $course->course_type }}</option>
                  @if ($course->course_type == 'Comercias')
                    <option value="Nao comercias">N&atilde;o Comercias</option>
                  @else
                    <option value="Comercias">Comercias</option>
                  @endif
              </select>
          </div>
        </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
                  <label class="form-label">Pagamento Mensal</label>
          <input type="text" name="monthly" value="{{ $course->monthly_payment }}" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" />
          </div>  
        </div>  
  </div>
  <script>
    require(['input-mask']);
  </script>
    <div class="card-footer text-right">
      <div class="d-flex">
        <a href="javascript:void(0)" class="btn btn-link">Cancelar</a>
        <button type="submit" class="btn btn-primary ml-auto">Atualisar dados</button>
      </div>
    </div>
    </div>
  </form>
@endsection