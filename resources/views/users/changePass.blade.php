@extends('layout.app')

@section('content')
<form action="{{ route('user.update') }}" method="post" class="card">
  {!! csrf_field() !!}
    <input type="hidden" name="name" value="{{ Auth::user()->name }}">
    <input type="hidden" name="email" value="{{ Auth::user()->email}}">
    <div class="card-header">
      <h3 class="card-title">Altere sua senha</h3>
    </div>
    <div class="card-body">
      @if ($msg == 'success')
        <div class="alert alert-success" role="alert">
           Palavra passe atualisada com sucesso!
        </div>
        @elseif ($msg == 'passIncorrect')
          <div class="alert alert-danger" role="alert">
              Palavra passe incorreta!
          </div>
        @elseif($msg == 'notMatch')
        <div class="alert alert-danger" role="alert">
              Confirma senha n&atilde;o corresponde!
          </div>
      @endif
      <div class="row">
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label for="password-confirm" class="form-label">{{ __('Palavra Passe Atual') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="password" required autocomplete="Password">
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label for="password-confirm" class="form-label">{{ __('Nova Palavra Passe') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="newPassword" required autocomplete="New-password">
        </div>
      </div>
      <div class="col-sm-6 col-md-6">
        <div class="form-group">
          <label for="password-confirm" class="form-label">{{ __('Confirmar Palavra Passe') }}</label>
          <input id="password-confirm" type="password" class="form-control" name="confirmPassword" required autocomplete="Confirm-password">
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