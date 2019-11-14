@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Relatorio Semanal
        </h1>
        </div>  
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
              <tr>
                  <th colspan="5">
                      <a href="{{ url('report.weeklyPdf') }}" class="btn btn-secondary float-right"><i class="fa fa-file-pdf-o"></i> Exportar</a>
                  </th>
                </tr>
                <tr>
                  <th>Estudante</th>
                  <th>Data</th>
                  <th>Credito</th>
                  <th>Debito</th>
                  <th>Total</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($accounts as $account)
                    <tr>
                        <td>{{$account->students->name}}</td>
                        <td>{{$account->account_date}}</td>
                        <td class="amount">{{$account->credit}}</td>
                        <td class="amount">{{$account->debit}}</td>
                        <td class="amount">{{$totais}}</td>
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