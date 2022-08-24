<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>توابل الأجواد </title>
    <!-- Favicon icon -->
    <link href="{{asset('Dashboard/css/style.css')}}" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('icon-bo.png')}}">

</head>


<style>
    body {
  margin: 0;
  font-family: "Roboto", sans-serif;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.5;
  color: #89879f;
  text-align: left;
  background-color: #313332;
}
</style>

<body class="h-100" >
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">

                                    <div class="text-center">
                                        <img style="width: 50%; height:50%" src="{{asset('/Template/images/basic/logo-bo.png')}}" alt=""> <br>
                                        <h4 class="text-center mb-4 mt-3">Connectez-vous à votre compte</h4>

                                    </div>
                               
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('Email') }}</strong></label>
                                            <input type="text"  class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus value="username">
                                            @error('username')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>{{ __('Mot de passe') }}</strong></label>
                                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" >
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        </div>
                                        <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                            <div class="form-group">
                                               <div class="custom-control custom-checkbox ml-1">
													<input type="checkbox" class="custom-control-input" name="remember_me" value="1" id="basic_checkbox_1">
													<label class="custom-control-label" for="basic_checkbox_1">Se souvenir de moi</label>
												</div>
                                            </div>
                                            
                                        </div>
                                        <div class="text-center">
                                            <button type="submit"  class="btn btn-danger btn-block" >
                                                Se connecter</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Vous n'avez pas de compte ? <a  style="color: red" href="{{url('/register')}}">
                                            S'inscrire</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="Dashboard/vendor/global/global.min.js"></script>
	<script src="Dashboard/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="Dashboard/js/custom.min.js"></script>
    <script src="Dashboard/js/deznav-init.js"></script>

</body>

</html>