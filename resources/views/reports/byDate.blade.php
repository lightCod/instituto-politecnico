@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Relatorio POr Data
        </h1>
      </div>  
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
              <tr>*
                  <th colspan="5">
                      <a href="{{ url('report.bydatePdf') }}?initial_date={{$initial_date}}?final_date={{$final_date}}" class="btn btn-secondary float-right"><i class="fa fa-file-pdf-o"></i> Exportar</a>
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
                        <td>{{$account->credit}}</td>
                        <td>{{$account->debit}}</td>
                        <td>{{$totais}}</td>
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>
@endsection