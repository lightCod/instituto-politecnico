@extends('welcome')

@section('content')
<form action="{{ route('student.update', $student->id) }}" method="post" class="card">
  {!! csrf_field() !!}
    <div class="card-header">
      <h3 class="card-title">Atualisar dados do estudante</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O estudante foi atualisado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar atualisar estudante!
          </div>
        @else
            
      @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome </label>
          <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="Curso..">
          </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Nivel</label>
            <select class="form-control custom-select" name="level">
                <option value="10">10ª</option>
                <option value="12">12ª</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Telephone</label>
        <input type="text" name="contacto" class="form-control" value="{{$student->contacto}}" data-mask="(0000) 00-00-000" data-mask-clearifnotmatch="true" />
          </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Bolsista?</label>
            <select class="form-control custom-select" name="scholarship">
                <option value="1">Sim</option>
                <option value="0">N&atilde;o</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Tipo de bolsa</label>
            <select class="form-control custom-select" name="scholarship_type">
                <option value="12.5%">12.5%</option>
                <option value="15%">15%</option>
                <option value="25%">25%</option>
                <option value="100%">100%</option>
            </select>
        </div>  
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label class="form-label">Observa&ccedil;&otilde;es</label>
        <textarea class="form-control" name="obs" value="{{$student->obs}}" rows="5">Big belly rude boy, million dollar hustler. Unemployed.</textarea>
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