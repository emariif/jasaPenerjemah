@extends('nav.nav_landing')

@section('konten')
<link rel="stylesheet" href="css/login.css" />
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent  text-center ">
                    <img src="images/Translator..svg" alt="" width="140px" class="mb-2 mt-2">
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                placeholder="Email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password" placeholder="Password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group d-md-flex">
                            <div class="w-50 text-md-start">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Remember me
                                </label>

                            </div>
                            <div class="w-50 text-md-end">

                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-dark px-3 shadow-sm register"
                                value="Sign In">
                            @if (Route::has('password.request'))
                            <a href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </div>
                    </form>
                    {{-- <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p> --}}
                    {{-- <div class="social d-flex text-center mb-3">
                        <a href="#" class="px-2 py-2 mr-md-1 rounded btn w-50 me-2 shadow-sm"
                            style="background-color: #fff; color: #62646A; border-color: #E4E5E7;"><i
                                class="bi bi-facebook me-2"></i>
                            Facebook</a>
                        <a href="#" class="px-2 py-2 ml-md-1 rounded btn w-50 shadow-sm"
                            style="background-color: #fff; color: #62646A; border-color: #E4E5E7;"><i
                                class="bi bi-google me-2"></i>
                            Google</a>
                    </div> --}}
                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            Not a member?
                        </span>

                        <a href="{{ url('register') }}" class="txt2 bo1">
                            Sign up now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection