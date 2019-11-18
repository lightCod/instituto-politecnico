@extends('layout.app')

@section('content')
<form action="{{'storestudent'}}" method="post" class="card">
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
  <input type="hidden" name="id" value="{{$course_id}}">
    <div class="card-header">
      <h3 class="card-title">Registro novo estudante</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O estudante foi registrado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar um novo estudante!
          </div>      
      @endif
  <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Numero de estudante </label>
            <input type="text" class="form-control" name="num_student" placeholder="Num Estudant..." required>
          </div>
        </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome </label>
            <input type="text" class="form-control" name="name" placeholder="Estudante..." required>
          </div>
        </div>
    <div class="form-group col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Nivel</label>
            <select class="form-control custom-select" name="level">
                <option value="10">10</option>
                <option value="12">12</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Telephone</label>
            <input type="text" name="contacto" class="form-control" data-mask="(+000) 00-00-00-000" data-mask-clearifnotmatch="true" placeholder="000-00-00-00-000">
          </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Genero</label>
            <select class="form-control custom-select" name="gender">
                <option value="F">Femenino</option>
                <option value="M">Masculino</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Bolsista?</label>
            <select class="form-control custom-select" name="scholarship">
                <option value="0" selected="selected">N&atilde;o</option>
                <option value="1">Sim</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Tipo de bolsa</label>
            <select class="form-control custom-select" name="scholarship_type">
                <option value="None" selected="selected">None</option>
                <option value="12.5%">12.5%</option>
                <option value="15%">15%</option>
                <option value="25%">25%</option>
                <option value="100%">100%</option>
            </select>
        </div>  
      </div> 
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Escola onde frequentou o nivel Medio/Basico </label>
            <input type="text" class="form-control" name="last_school" placeholder="Escola..." required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Modalidades de pagamento </label>
            <input type="text" class="form-control" name="how_to_pay" placeholder="Modalidade de pagamento..." required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Fonte de Financiamento </label>
            <input type="text" class="form-control" name="funding_source" placeholder="Fonte de financiamento..." required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome do Encarregado</label>
            <input type="text" class="form-control" name="name_of_carer" placeholder="Nome do encarregado..." required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Contacto do Encarregado </label>
            <input type="text" class="form-control" name="contact_of_carer" data-mask="(+000) 00-00-00-000" data-mask-clearifnotmatch="true" placeholder="000-00-00-00-000" required>
          </div>
    </div>
    <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Documento </label>
            <select class="form-control custom-select" name="doc">
                <option value="BI" selected="selected">BI</option>
                <option value="Passaporte">Passaporte</option>
                <option value="Carta de Conducao">Carta de Condu&ccedil;&atilde;o</option>
                <option value="Cedula">Cedula</option>
                <option value="Cartao de eleitor">Cart&atilde;o de eleitor</option>
                <option value="DIRE">DIRE</option>
            </select>
          </div>
    </div>
    <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Numero do Doc </label>
            <input type="text" class="form-control" name="doc_number" placeholder="Numero de doc..." required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Proveniencia </label>
            <input type="text" class="form-control" name="provenance" placeholder="Provenien&ccedil;a..." required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Ano que frequentou a ultima classe? </label>
            <input type="text" class="form-control" name="finish_year" data-mask="0000" data-mask-clearifnotmatch="true" placeholder="0000" required>
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Endere&ccedil;o </label>
            <input type="text" class="form-control" name="address" placeholder="Endere&ccedil;o..." required>
          </div>
    </div>
    <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Data de Nascimento</label>
                <input type="text" name="date_birth" class="form-control" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" required>
            </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Cuidado Especial </label>
            <input type="text" class="form-control" name="need_care" placeholder="Cuidado Especial...">
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