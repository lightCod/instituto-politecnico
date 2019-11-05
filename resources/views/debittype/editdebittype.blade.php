@extends('layout.app')

@section('content')
<form action="{{ route('debittype.update') }}" method="post" class="card">
  {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{$debittype->id}}">
    <div class="card-header">
      <h3 class="card-title">Atualisacao do tipo de debito</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O tipo de tipo debito foi atualisado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar atualidar o tipo de debito!
          </div>      
      @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome do debito</label>
          <input type="text" class="form-control" name="debitname" value="{{$debittype->debit_name}}" placeholder="Curso..">
          </div>
      </div>
       <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">valor</label>
        <input type="text" name="amount" class="form-control" value="{{$debittype->amount}}" data-mask="000.000.000.000.000,00" data-mask-reverse="true" />
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