@extends('layout.app')

@section('content')
<form action="{{ route('debit.update') }}" method="post" class="card">
  {!! csrf_field() !!}
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif
    <input type="hidden" name="debit_id" value="{{$debit->id}}"/>
    <input type="hidden" name="account_id" value="{{$account->id}}"/>
    <div class="card-header">
      <h3 class="card-title">Atualisacao do debito</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O debito foi atualisado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar atualisar o debito!
          </div>
        @else   
      @endif
    <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Data</label>
            <input type="text" name="debit_date" class="form-control" value="{{$debit->debit_date}}" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" required>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Referente</label>
                <select class="form-control custom-select" name="refering_mounth">
                    <option value="{{$debit->refering_mounth}}" selected="selected">{{$debit->refering_mounth}}</option>
                    @switch($debit->refering_mounth)
                  @case("Janeiro")
                    <option value="Fevereiro">Fevereiro</option>
                    <option value="Marco">Marco</option>
                    <option value="Abril">Abril</option>
                    <option value="Maio">Maio</option>
                    <option value="Junho">Junho</option>
                    <option value="Julho">Julho</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Setembro">Setembro</option>
                    <option value="Outubro">Outubro</option>
                    <option value="Novembro">Novembro</option>
                    <option value="Dezembro">Dezembro</option>
                      @break
                  @case("Fevereiro")
                    <option value="Janeiro">Janeiro</option>
                    <option value="Marco">Marco</option>
                    <option value="Abril">Abril</option>
                    <option value="Maio">Maio</option>
                    <option value="Junho">Junho</option>
                    <option value="Julho">Julho</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Setembro">Setembro</option>
                    <option value="Outubro">Outubro</option>
                    <option value="Novembro">Novembro</option>
                    <option value="Dezembro">Dezembro</option>
                      @break
                  @case("Marco")
                    <option value="Janeiro">Janeiro</option>
                    <option value="Fevereiro">Fevereiro</option>
                    <option value="Abril">Abril</option>
                    <option value="Maio">Maio</option>
                    <option value="Junho">Junho</option>
                    <option value="Julho">Julho</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Setembro">Setembro</option>
                    <option value="Outubro">Outubro</option>
                    <option value="Novembro">Novembro</option>
                    <option value="Dezembro">Dezembro</option>
                        @break
                  @case("Abril")
                    <option value="Janeiro">Janeiro</option>
                    <option value="Fevereiro">Fevereiro</option>
                    <option value="Marco">Marco</option>
                    <option value="Maio">Maio</option>
                    <option value="Junho">Junho</option>
                    <option value="Julho">Julho</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Setembro">Setembro</option>
                    <option value="Outubro">Outubro</option>
                    <option value="Novembro">Novembro</option>
                    <option value="Dezembro">Dezembro</option>
                        @break 
                  @case("Maio")
                    <option value="Janeiro">Janeiro</option>
                    <option value="Fevereiro">Fevereiro</option>
                    <option value="Marco">Marco</option>
                    <option value="Abril">Abril</option>
                    <option value="Junho">Junho</option>
                    <option value="Julho">Julho</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Setembro">Setembro</option>
                    <option value="Outubro">Outubro</option>
                    <option value="Novembro">Novembro</option>
                    <option value="Dezembro">Dezembro</option>
                        @break 
                  @case("Junho")
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Marco">Marco</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Julho">Julho</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Setembro">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                        @break
                  @case("Julho")
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Marco">Marco</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Julho</option>
                      <option value="Agosto">Agosto</option>
                      <option value="Setembro">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                        @break
                  @case("Agosto")
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Marco">Marco</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Julho</option>
                      <option value="Julho">Agosto</option>
                      <option value="Setembro">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                        @break
                    @case("Setembro")
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Marco">Marco</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Julho</option>
                      <option value="Julho">Agosto</option>
                      <option value="Agosto">Setembro</option>
                      <option value="Outubro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                        @break  
                    @case("Outubro")
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Marco">Marco</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Julho</option>
                      <option value="Julho">Agosto</option>
                      <option value="Agosto">Setembro</option>
                      <option value="Setembro">Outubro</option>
                      <option value="Novembro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                        @break 
                      @case("Novembro")
                      <option value="Janeiro">Janeiro</option>
                      <option value="Fevereiro">Fevereiro</option>
                      <option value="Marco">Marco</option>
                      <option value="Abril">Abril</option>
                      <option value="Maio">Maio</option>
                      <option value="Junho">Julho</option>
                      <option value="Julho">Agosto</option>
                      <option value="Agosto">Setembro</option>
                      <option value="Setembro">Outubro</option>
                      <option value="Outubro">Novembro</option>
                      <option value="Dezembro">Dezembro</option>
                        @break                                            
                  @default
                    <option value="Janeiro">Janeiro</option>
                    <option value="Fevereiro">Fevereiro</option>
                    <option value="Marco">Marco</option>
                    <option value="Abril">Abril</option>
                    <option value="Maio">Maio</option>
                    <option value="Junho">Junho</option>
                    <option value="Julho">Julho</option>
                    <option value="Agosto">Agosto</option>
                    <option value="Setembro">Setembro</option>
                    <option value="Outubro">Outubro</option>
                    <option value="Novembro">Novembro</option>
              @endswitch   
                </select>
            </div>
        </div> 
        <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label class="form-label">Ano</label>
          <input type="text" class="form-control" name="year" value="{{$debit->year}}" data-mask="0000" data-mask-clearifnotmatch="true" placeholder="0000" required>
        </div>
      </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
              <label class="form-label">Tipo de Debito</label>
              <select class="form-control custom-select" name="debit_type_id">
                  <option value="{{$debitTyp->id}}" selected="selected">{{$debitTyp->debit_name}}</option>
                  @foreach ($debitTypes as $debitType)
                    @if(!($debitType->debit_name ==  $debitTyp->debit_name))
                      <option value="{{$debitType->id}}">{{$debitType->debit_name}}</option>
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