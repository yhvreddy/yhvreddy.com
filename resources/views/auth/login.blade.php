<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login - Admin Dashboard.</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset('public\assets\css\app.min.css')}}">
  <link rel="stylesheet" href="{{asset('public\assets\bundles\bootstrap-social\bootstrap-social.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset('public\assets\css\style.css')}}">
  <link rel="stylesheet" href="{{asset('public\assets\css\components.css')}}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset('public\assets\css\custom.css')}}">
  <link rel='shortcut icon' type='image/x-icon' href='{{asset("public\assets\img\favicon.ico")}}'>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4 mt-5">
            <div class="card card-primary mt-5">
              <div class="card-header">
                <h4>Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}" class="needs-validation" novalidate="">
                    @csrf
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="#" class="text-small">
                          Forgot Password..?
                        </a>
                      </div>
                    </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Login
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="mt-5 text-muted text-center">
              All Reights Reserved @ 2020 Developed By yhvreddy.info
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{asset('public\assets\js\app.min.js')}}"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{asset('public\assets\js\scripts.js')}}"></script>
  <!-- Custom JS File -->
  <script src="{{ asset('public\assets\js\custom.js') }}"></script>
</body>

</html>