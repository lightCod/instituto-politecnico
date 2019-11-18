@extends('layout.app')

@section('content')
<form action="{{'storeuser'}}" method="post" class="card">
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
    <div class="card-header">
      <h3 class="card-title">Registro de Usuario</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
            O usuario registrado com sucesso!
        </div>
        @elseif ($msg == 'error')
          <div class="alert alert-danger" role="alert">
              Houve um erro ao tentar registrar um novo usuario!
          </div>    
      @endif
      <div class="row">
        <div class="form-group col-sm-6 col-md-6">
          <div class="form-group">
            <label class="form-label">Nome do Usuario</label>
            <input type="text" class="form-control" name="name" placeholder="Nome.." required>
          </div>
      </div>
       <div class="col-sm-6 col-md-6">
        <div class="form-group">
        <label class="form-label">Email-Address</label>
            <input type="email" class="form-control" name="email" placeholder="your-email@domain.com" required>
        </div>  
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
            <label class="form-label">Tipo de Usuario</label>
            <select class="form-control custom-select" name="user_type">
                <option value="Administrador">Administrador</option>
                <option value="Secretaria">Secretaria</option>
            </select>
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
      <div class="form-group">
          <label for="password" class="form-label">{{ __('Password') }}</label>
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>    
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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