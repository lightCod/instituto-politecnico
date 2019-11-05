@extends('layout.app')

@section('content')
    <div class="page-header">
        <h1 class="page-title">
            Lista De Usuarios
        </h1>
    </div>    
        @if ($msg == 'success')
            <div class="alert alert-success" role="alert">
                Usuario removido com sucesso!!
            </div>
            @elseif ($msg == 'error')
              <div class="alert alert-danger" role="alert">
                N&atilde;o &eacute; possivel remover o usuario!
              </div>
            @else
                
          @endif
        <div class="table-responsive">
            <table class="table card-table table-striped table-vcenter">
              <thead>
                <tr>
                  <th colspan="5">
                      <a href="{{ route('createuser') }}" class="btn btn-secondary"><i class="fa fa-plus"></i> Novo Usuario</a>
                  </th>
                </tr>
                <tr>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Tipo de Usuario</th>
                  <!--<th></th>-->
                  <th></th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->user_type}}</td>
                        <!--<td>
                        
                        <a class="icon" href="{{ url('user.edit') }}?id={{$user->id}}">
                          <i class="fe fe-edit"></i>
                        </a>
                        </td>-->
                        <td class="w-1">
                          <form action="{{ route('user.destroy') }}" method="post">
                            {!! csrf_field() !!}
                            <input type="hidden" name="id" value="{{$user->id}}" />
                            <button class="icon" type="submit"><i class="fe fe-trash"></i></button>
                          </form>
                        </td>
                    </tr> 
                  @endforeach     
              </tbody>
            </table>
          </div>

@endsection