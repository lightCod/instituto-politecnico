@extends('layout.app')

@section('content')
<form action="{{'student.automaticDebit'}}" method="post" class="card">
  {!! csrf_field() !!}
    <input type="hidden" name="course_id" value="{{$course->id}}" />
    <div class="card-header">
      <h3 class="card-title">Debitar estudantes de: {{$course->courseName}}</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            Os debitos foram registrado a todos estudantes do curso com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar os debitos aos estudantes!
          </div>
        @eleseif ($msg == 'nost')  
        <div class="alert alert-danger" role="alert">
              A turma esta vazia n&atilde;o existe nenhum estudante cadastrado!
          </div>      
      @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Date</label>
                <input type="text" name="debit_date" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" required>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Referente</label>
                <select class="form-control custom-select" name="refering_mounth">
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
                    <option value="Dezembro">Dezembro</option>
                </select>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label class="form-label">Ano</label>
          <input type="text" class="form-control" name="year" data-mask="0000" data-mask-clearifnotmatch="true" placeholder="0000" required>
        </div>
      </div>
        <div class="col-sm-6 col-md-6">
          <div class="form-group">
              <label class="form-label">Tipo de Debito</label>
              <select class="form-control custom-select" name="debit_type_id">
                  @foreach ($debitTypes as $debitType)
              <option value="{{$debitType->id}}">{{$debitType->debit_name}}</option>
                  @endforeach
              </select>
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