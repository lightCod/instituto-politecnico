@extends('layouts.app')

		@section('content')
		<div class="container">
          <div class="row">
            <div class="col col-login mx-auto">
              <div class="text-center mb-6">
                <img src="./assets/brand/tabler.svg" class="h-6" alt="">
              </div>
              <form class="card" action="{{ route('login') }}" method="post">
				@csrf
                <div class="card-body p-6">
                  <div class="card-title">Fa&ccedil;a login na sua conta</div>
                  <div class="form-group">
                    <label class="form-label">{{ __('E-Mail Address') }}</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
					@error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="form-label">
                      {{ __('Password') }}
                      @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="#">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                    </label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
					@error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}/>
                      <span class="custom-control-label">{{ __('Remember Me') }}</span>
                    </label>
                  </div>
                  <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
		@endsection