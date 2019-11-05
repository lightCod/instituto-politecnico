@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Lista de estudantes
        </h1>
        </div>    
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th>Genero</th> <th>Total</th>
                </tr>
              </thead>
              <tbody>
                    <tr>
                        <td>Femenino</td><td>{{$female}}</td>
                    </tr> 
                    <tr>
                        <td>Masculino</td><td>{{$male}}</td>
                    </tr>    
              </tbody>
            </table>
          </div>
@endsection