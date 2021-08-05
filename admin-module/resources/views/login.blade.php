<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="{{ asset('template-resources/plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('template-resources/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <link href="{{ asset('template-resources/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('custom-resources/css/custom-style.css') }}" rel="stylesheet">
    <style>
        .login-clean{background:#f1f7fc;padding:80px 0}.login-clean form{max-width:320px;width:90%;margin:0 auto;background-color:#fff;padding:40px;border-radius:4px;color:#505e6c;box-shadow:1px 1px 5px rgba(0,0,0,.1)}.login-clean .illustration{text-align:center;padding:0 0 20px;font-size:100px;color:#f4476b}.login-clean form .form-control{background:#f7f9fc;border:none;border-bottom:1px solid #dfe7f1;border-radius:0;box-shadow:none;outline:0;color:inherit;text-indent:8px;height:42px}.login-clean form .btn-primary{background:#000;border:none;border-radius:4px;padding:11px;box-shadow:none;margin-top:26px;text-shadow:none;outline:0!important}.login-clean form .btn-primary:active,.login-clean form .btn-primary:hover{background:#000}.login-clean form .btn-primary:active{transform:translateY(1px)}.login-clean form .forgot{display:block;text-align:center;font-size:12px;color:#6f7a85;opacity:.9;text-decoration:none}.login-clean form .forgot:active,.login-clean form .forgot:hover{opacity:1;text-decoration:none}
    </style>
    <title>Full Article</title>
</head>
<body>
    <div class="login-clean">
    <form method="post" action="{{ route('login') }}">
        @csrf
            <h2 class="sr-only">Login Form</h2>
            <h5>Login</h5>
            <div class="illustration"></div>
            <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
            <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div><a class="forgot" href="#">Forgot your email or password?</a></form>
    </div>
</body>
</html>