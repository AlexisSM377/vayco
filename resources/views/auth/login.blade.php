@extends('layouts.app')

@section('body')
<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror form-control-user"
                                        id="email"
                                        value="{{ old('email') }}"aria-describedby="emailHelp"
                                        placeholder="correo electronico">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror form-control-user"
                                        id="password" placeholder="contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="customCheck">Recuerdame</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Login
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                @if (Route::has('password.request'))
                                <a class="small" href="{{ route('password.request') }}">Olvidaste la contraseña</a>
                                @endif
                            </div>
                            {{-- <div class="text-center">
                                <a class="small" href="register.html">Create an Account!</a>
                            </div> --}}
                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
