@extends('layout.app')

@section('content')
<form action="{{'credit.update'}}" method="post" class="card">
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
    <input type="hidden" name="credit_id" value="{{$credit->id}}" />
    <input type="hidden" name="account_id" value="{{$account->id}}" />
    <div class="card-header">
    <h3 class="card-title">Atualisacao do credito</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O credito foi atualisado com sucesso!
            <div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-notify modal-info" role="document">
                <!--Content-->
                <div class="modal-content text-center">
                  <!--Header-->
                  <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Recibo do Cliente</p>
                  </div>

                  <!--Body-->
                  <div class="modal-body">
                    <i class="fa fa-file-text fa-4x animated rotateIn mb-4"></i>
                    <p>Cria e imprima o recido do estudante</p>
                  </div>

                  <!--Footer-->
                  <div class="modal-footer flex-center">
                    <a href="{{ url('generate.receipt') }}?credit_id={{$account->provenance_id}}" class="btn btn-info">Imprimir Recibo</a>
                    <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Cancelar</a>
                  </div>
                </div>
                <!--/.Content-->
              </div>
          </div>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script type="">
            $(window).on('load',function(){
              $('#modalPush').modal('show');
            });
          </script> 
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar atualisar o credito!
          </div>
        @endif
    <div class="row">
        <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Pagamento Referente</label>
                <input type="text" name="regarding" value="{{$credit->regarding}}" class="form-control"  placeholder="Pagamento referente" required>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Referente</label>
                <select class="form-control custom-select" name="month">
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
          <input type="text" class="form-control" name="year" value="{{$credit->year}}" data-mask="0000" data-mask-clearifnotmatch="true" placeholder="0000" required>
        </div>
      </div>
        <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Date</label>
                <input type="text" name="credit_date" value="{{$credit->credit_date}}" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" required>
            </div>
        </div>
        <div class="col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Valor</label>
                <input type="text" name="amount" value="{{$credit->amount}}" class="form-control" data-mask="000.000.000.000.000,00" data-mask-reverse="true" required>
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