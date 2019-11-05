@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Lista De Tipos de Debitos
        </h1>
      </div>    
        @if ($msg == 'success')
            <div class="alert alert-success" role="alert">
                O tipo de Debito removido com sucesso!!
            </div>
            @elseif ($msg == 'error')
              <div class="alert alert-danger" role="alert">
                N&atilde;o &eacute; possivel remover o tipo de debitos existe pagamentos associado a ele!
              </div>
            @else
                
          @endif
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th colspan="5">
                      <a href="{{ route('createdebittype') }}" class="btn btn-secondary"><i class="fa fa-plus"></i> Novo Tipo de Debito</a>
                  </th>
                </tr>
                <tr>
                  <th>Nome do debito</th>
                  <th>Valor a debitar</th>
                  <th>dia de cobranca</th>
                  @if(Auth::user()->user_type == 'Administrador')
                    <th></th>
                    <th></th>
                  @endif
                </tr>
              </thead>
              <tbody>
                  @foreach ($debittypes as $debittype)
                    <tr>
                        <td>{{$debittype->debit_name}}</td>
                        <td>{{$debittype->amount}}</td>
                        <td>{{$debittype->start_charge_fine}}</td>
                        @if(Auth::user()->user_type == 'Administrador')
                        <td>
                        <a class="icon" href="{{ url('debittype.edit') }}?id={{$debittype->id}}">
                          <i class="fe fe-edit"></i>
                        </a>
                        </td>
                        <td class="w-1">
                          <form action="{{ route('debittype.destroy') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$debittype->id}}" />
                            <button class="icon" type="submit"><i class="fe fe-trash"></i></button>
                          </form>
                        </td>
                        @endif
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
@endsection