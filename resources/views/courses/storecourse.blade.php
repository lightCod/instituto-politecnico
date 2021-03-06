@extends('layout.app')

@section('content')
<form action="{{'storecourse'}}" method="post" class="card">
  {!! csrf_field() !!}
    <div class="card-header">
      <h3 class="card-title">Registro de Curso</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O curso foi registrado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar um novo curo!
          </div>      
        @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome do curso</label>
            <input type="text" class="form-control" name="coursename" placeholder="Curso.." required>
          </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label class="form-label">Dura&ccedil;&atilde;o</label>
          <input type="text" class="form-control" name="duration" placeholder="Dura&ccedil;&atilde;o.." required>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label class="form-label">Ano Corrente</label>
          <input type="text" class="form-control" name="year" data-mask="0000" data-mask-clearifnotmatch="true" placeholder="0000" required>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Tipo de Curso</label>
            <select class="form-control custom-select" name="course_name">
                <option value="Comercias">Comercias</option>
                <option value="Nao comercias">N&atilde;o Comercias</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
                <label class="form-label">Pagamento Mensal</label>
                <input type="text" name="monthly" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" required>
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