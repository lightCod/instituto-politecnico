@extends('layout.app')

@section('content')
<form action="{{'storedebittype'}}" method="post" class="card">
  {!! csrf_field() !!}
    <div class="card-header">
      <h3 class="card-title">Registro do tipo de debito</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O tipo de debito registrado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar um novo tipo de debito!
          </div>    
      @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome do debito</label>
            <input type="text" class="form-control" name="debitname" placeholder="Tipo de debito..">
          </div>
      </div>
       <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">valor</label>
            <input type="text" name="amount" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" />
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