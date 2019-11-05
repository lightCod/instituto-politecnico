@extends('layout.app')

@section('content')
<form action="{{'report.getByDate'}}" method="post" class="card">
  {!! csrf_field() !!}
    <div class="card-header">
    <h3 class="card-title">Relatorio por data </h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O credito foi registrado com sucesso!
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar um novo credito!
          </div>
      @endif
    <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Data Inicial</label>
                <input type="text" name="intial_date" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" required>
            </div>
        </div>
        <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Data Final</label>
                <input type="text" name="final_date" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" required>
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