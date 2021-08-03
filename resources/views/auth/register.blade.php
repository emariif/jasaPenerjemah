@extends('nav.nav_landing')

@section('konten')
<link rel="stylesheet" href="css/register.css" />
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header bg-transparent  text-center ">
                    <h4 class="mb-2 mt-2">Create Account</h4>
                </div>
                <div class="card-body">
                    <form class="form-detail" action="#" method="post" id="myform">
                        <div class="form-group">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="Nama"
                                autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input id="username" type="text"
                                class="form-control @error('username') is-invalid @enderror" name="username"
                                value="{{ old('username') }}" required autocomplete="username" autofocus
                                placeholder="Username">

                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                        </div>
                        <div class="form-group">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email"
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
                                autocomplete="new-password" placeholder="Password">

                        </div>
                        <div class="form-group">
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password"
                                placeholder="Konfirmasi Password">

                        </div>
                        <div class="form-group">
                            <label for="userLevel">Select Roles :</label> <br>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="level" value="Client"
                                    id="userClient">
                                <label for="userClient" class="form-check-label">Client</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" name="level" value="Translator"
                                    id="userTranslator">
                                <label for="userTranslator" class="form-check-label">Translator</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="register"
                                class="form-control btn btn-dark px-3 shadow-sm register" value="Sign Up">
                        </div>
                    </form>
                    <div class="w-full text-center p-t-55">
                        <span class="txt2">
                            Have a account?
                        </span>

                        <a href="{{ url('login') }}" class="txt2 bo1 text-primary">
                            Sign in now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection