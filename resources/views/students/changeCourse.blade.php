@extends('layout.app')

@section('content')
<form action="{{'student.changeCourse'}}" method="post" class="card">
  {!! csrf_field() !!}
    <input type="hidden" name="student_id" value="{{$student->id}}" />
    <div class="card-header">
      <h3 class="card-title"></h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O estudante mudou de curso com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar um novo debito!
          </div>      
      @endif
<div class="row">
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label class="form-label">Nome</label>
          <input type="text" class="form-control" name="student_name" value="{{$student->name}}" readonly>
        </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Curso</label>
            <select class="form-control custom-select" name="course_id">
                <option value="{{$course->id}}" selected="selected">{{$course->courseName}}</option>
                @foreach ($courses as $cours)
                  @if($course->courseName != $cours->courseName)
                    <option value="{{$cours->id}}">{{$cours->courseName}}</option>
                  @endif  
                @endforeach
            </select>
        </div>
    </div>
</div>
<script>
  require(['input-mask']);
</script>
  <div class="card-footer text-right">
    <div class="d-flex">
      <a href="javascript:void(0)" class="btn btn-link">Cancelar</a>
      <button type="submit" class="btn btn-primary ml-auto">Enviar dados</button>
    </div>
  </div>
  </div>
</form>
@endsection