@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Conta Corrente de: {{ $student->name }}
        </h1>
        </div>
        @if ($msg == 'success')
            <div class="alert alert-success" role="alert">
                {{$type}} removido com sucesso!!
            </div>
            @elseif ($msg == 'error')
              <div class="alert alert-danger" role="alert">
                N&atilde;o &eacute; possivel remover o {{$type}} !!
              </div>       
          @endif    
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
              <tr>
                  <th colspan="9">
                    <a href="{{ url('studentaccount.report') }}?student_id={{ $student->id }}" class="btn btn-secondary float-right"><i class="fa fa-file-pdf-o"></i> Exportar</a>
                  </th>
                </tr>
                <tr>
                  <th>Data</th>
                  <th>Referente</th>
                  <th>Credito</th>
                  <th>Debito</th>
                  <th>Saldo</th>
                  <th>Moeda</th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($accounts as $account)
                    <tr>
                        <td>{{ $account->account_date }}</td>
                        <td>{{ $account->regarding }}</td>
                        <td class="amount">{{ $account->credit }}</td>
                        <td class="amount">{{ $account->debit }}</td>
                        <td class="amount">{{ $account->total }}</td>
                        <td> MTN </td>
                        <td>
                          @if ($account->debit == 0.00)
                            <a class="icon" href="{{ route('generate.receipt') }}?credit_id={{$account->provenance_id}}" title="Imprimir recibo">
                              <i class="fa fa-print"></i>
                            </a>
                          @endif
                        </td>
                        @if(Auth::user()->user_type == 'Administrador')
                          <td>
                            @if ($account->debit == 0.00)
                              <a class="icon" href="{{ route('credit.edit') }}?credit_id={{$account->provenance_id}}&account_id={{$account->id}}" title="Editar">
                                <i class="fe fe-edit"></i>
                              </a>
                            @else 
                              <a class="icon" href="{{ route('debit.edit') }}?debit_id={{$account->provenance_id}}&account_id={{$account->id}}" title="Editar">
                                <i class="fe fe-edit"></i>
                              </a>
                            @endif  
                        </td>
                        <td class="w-1">
                        @if ($account->debit == 0.00)
                          <form action="credit.destroy" method="post">
                              {!! csrf_field() !!}
                              <input type="hidden" name="id" value="{{$account->id}}" />
                              <input type="hidden" name="student_id" value="{{ $student->id }}" />
                              <button class="icon" type="submit"><i class="fe fe-trash"></i></button>
                          </form>
                        @else 
                        <form action="debit.destroy" method="post">
                              {!! csrf_field() !!}
                              <input type="hidden" name="id" value="{{$account->id}}" />
                              <input type="hidden" name="student_id" value="{{ $student->id }}" />
                              <button class="icon" type="submit"><i class="fe fe-trash"></i></button>
                          </form>
                        @endif  
                        </td>
                      @endif
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
@endsection
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/accounting.min.js')}}"></script>
<script>
    $(window).on('load',function(){
      $('table tr').each(function() {
      var $tds = $(this).find('td.amount');
      if($tds.length != 0) {
      var $currText = $tds.eq(0).text();
      var $currText1 = $tds.eq(1).text();
      var $currText2 = $tds.eq(2).text();
      $tds.eq(0).text(accounting.formatMoney($currText, "", 2, ".", ","));
      $tds.eq(1).text(accounting.formatMoney($currText1, "", 2, ".", ","));
      $tds.eq(2).text(accounting.formatMoney($currText2, "", 2, ".", ","));
      }
 });
    });
</script>