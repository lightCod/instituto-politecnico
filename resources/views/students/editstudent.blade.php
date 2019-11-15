@extends('layout.app')

@section('content')
<form action="{{ route('student.update' ) }}" method="post" class="card">
  {!! csrf_field() !!}
    <input type="hidden" name="id" value="{{$student->id}}">
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
      @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Numero de estudante </label>
          <input type="text" class="form-control" name="num_student" value="{{$student->num_student}}" placeholder="">
          </div>
    </div>
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome </label>
          <input type="text" class="form-control" name="name" value="{{$student->name}}" placeholder="">
          </div>
    </div>
    <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Nivel</label>
            <select class="form-control custom-select" name="level">
                <option value="{{$student->level}}" selected="selected">{{$student->level}}</option>
                @if ($student->level == 12)
                  <option value="10">10</option>
                @else
                <option value="12">12</option>
                @endif
                
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Genero</label>
            <select class="form-control custom-select" name="gender">
            <option value="{{$student->gender}}" selected="selected">
              @if ($student->gender == 'F') Femenino
              @else Masculino
              @endif
            </option>
                @if ($student->gender == 'F')
                  <option value="M">Masculino</option>
                @else 
                  <option value="F">Femenino</option>
                @endif
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Telephone</label>
        <input type="text" name="contacto" class="form-control" value="{{$student->contacto}}" data-mask="(+000) 00-00-00-000" data-mask-clearifnotmatch="true" />
          </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Bolsista?</label>
            <select class="form-control custom-select" name="scholarship">
              <option value="{{$student->scholarship}}" selected="selected">@if ($student->scholarship == 1) Sim
                  @else N&atilde;o
              @endif

              @if ($student->scholarship == 0)
                <option value="0">N&atilde;o</option>
              @else
                <option value="1">Sim</option>
              @endif
            </option>
                
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Tipo de bolsa</label>
            <select class="form-control custom-select" name="scholarship_type">
            <option value="{{$student->scholarship_type}}" selected="selected">{{$student->scholarship_type}}</option>
              @switch($student->scholarship_type)
                  @case("None")
                    <option value="12.5%">12.5%</option>
                    <option value="15%">15%</option>
                    <option value="25%">25%</option>
                    <option value="100%">100%</option>
                      @break
                  @case("12.5%")
                    <option value="None">None</option>
                    <option value="15%">15%</option>
                    <option value="25%">25%</option>
                    <option value="100%">100%</option>
                      @break
                      @case("15%")
                      <option value="None">None</option>
                      <option value="12.5%">12.5%</option>
                      <option value="25%">25%</option>
                      <option value="100%">100%</option>
                        @break
                      @case("25%")
                      <option value="None">None</option>
                      <option value="12.5%">12.5%</option>
                      <option value="15%">15%</option>
                      <option value="100%">100%</option>
                        @break      
                  @default
                    <option value="None">None</option>
                    <option value="12.5%">12.5%</option>
                    <option value="15%">15%</option>
                    <option value="25%">25%</option>
              @endswitch
                
            </select>
        </div>  
      </div>
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Escola onde frequentou o nivel Medio/Basico </label>
            <input type="text" class="form-control" name="last_school" value="{{$student->last_school}}" placeholder="Escola...">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Modalidades de pagamento </label>
            <input type="text" class="form-control" name="how_to_pay" value="{{$student->how_to_pay}}" placeholder="Modalidade de pagamento...">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Fonte de Financiamento </label>
            <input type="text" class="form-control" name="funding_source" value="{{$student->funding_source}}" placeholder="Fonte de financiamento...">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome do Encarregado</label>
            <input type="text" class="form-control" name="name_of_carer" value="{{$student->name_of_carer}}" placeholder="Nome do encarregado...">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Contacto do Encarregado </label>
            <input type="text" class="form-control" name="contact_of_carer" value="{{$student->contact_of_carer}}" data-mask="(+000) 00-00-00-000" data-mask-clearifnotmatch="true">
          </div>
    </div>
    <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Documento </label>
            <select class="form-control custom-select" name="doc">
                <option value="BI" selected="{{$student->doc}}">{{$student->doc}}</option>
                @switch($student->doc)
                  @case("Passaporte")
                    <option value="Carta de Conducao">Carta de Condu&ccedil;&atilde;o</option>
                    <option value="Cedula">Cedula</option>
                    <option value="Cartao de eleitor">Cart&atilde;o de eleitor</option>
                    <option value="DIRE">DIRE</option>
                    <option value="BI">BI</option>
                  @break
                  @case("Carta de Conducao")
                    <option value="Passaporte">Passaporte</option>
                    <option value="Cedula">Cedula</option>
                    <option value="Cartao de eleitor">Cart&atilde;o de eleitor</option>
                    <option value="DIRE">DIRE</option>
                    <option value="BI">BI</option>
                  @break
                  @case("Cedula")
                    <option value="BI" selected="selected">BI</option>
                    <option value="Passaporte">Passaporte</option>
                    <option value="Carta de Conducao">Carta de Condu&ccedil;&atilde;o</option>
                    <option value="Cartao de eleitor">Cart&atilde;o de eleitor</option>
                    <option value="DIRE">DIRE</option>
                  @break  
                @case("Cartao de eleitor")
                    <option value="BI" selected="selected">BI</option>
                    <option value="Passaporte">Passaporte</option>
                    <option value="Carta de Conducao">Carta de Condu&ccedil;&atilde;o</option>
                    <option value="Cedula">Cedula</option>
                    <option value="DIRE">DIRE</option>   
                @break  
                @case("DIRE")
                    <option value="BI" selected="selected">BI</option>
                    <option value="Passaporte">Passaporte</option>
                    <option value="Carta de Conducao">Carta de Condu&ccedil;&atilde;o</option>
                    <option value="Cedula">Cedula</option>
                    <option value="Cartao de eleitor">Cart&atilde;o de eleitor</option> 
                @break
                @case("BI")
                    <option value="Passaporte">Passaporte</option>
                    <option value="Carta de Conducao">Carta de Condu&ccedil;&atilde;o</option>
                    <option value="Cedula">Cedula</option>
                    <option value="Cartao de eleitor">Cart&atilde;o de eleitor</option>
                    <option value="DIRE">DIRE</option>       
                @endswitch
            </select>
          </div>
    </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Numero do Doc </label>
            <input type="text" class="form-control" name="doc_number" value="{{$student->doc_number}}" placeholder="Numero de doc...">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Proveniencia </label>
            <input type="text" class="form-control" name="provenance" value="{{$student->provenance}}" placeholder="Provenien&ccedil;a...">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Ano que frequentou a ultima classe? </label>
            <input type="text" class="form-control" name="finish_year" value="{{$student->finish_year}}" data-mask="0000" data-mask-clearifnotmatch="true" placeholder="0000">
          </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Endere&ccedil;o </label>
            <input type="text" class="form-control" name="address" value="{{$student->address}}" placeholder="Endere&ccedil;o...">
          </div>
    </div>
    <div class="form-group col-sm-6 col-md-6">
            <div class="form-group">
                <label class="form-label">Data de Nascimento</label>
                <input type="text" name="date_birth" class="form-control" value="{{$student->date_birth}}" data-mask="00/00/0000" data-mask-clearifnotmatch="true" placeholder="00/00/0000" />
            </div>
    </div>
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Cuidado Especial </label>
            <input type="text" class="form-control" name="need_care" value="{{$student->need_care}}" placeholder="Cuidado Especial...">
          </div>
    </div> 
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Activo?</label>
            <select class="form-control custom-select" name="active">
              <option value="{{$student->active}}" selected="selected">@if ($student->active == 1) Sim
                  @else N&atilde;o
              @endif
              @if ($student->active == 0)
                <option value="0">N&atilde;o</option>
              @else
                <option value="1">Sim</option>
              @endif
            </option>  
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