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

    <title>Full Article</title>
</head>
<body>
    <div class="container">
        <div class="row" style="height: 30px;"></div>
        <textarea style="width: 100%;height: 700px;min-width: 100%;min-height: 700px;border: 2px solid rgb(86,81,81);border-radius: 10px;"></textarea>
        <div class="row" style="min-width: auto;">
            <div class="col"><button class="btn btn-primary btn-sm" type="button" style="float: right;margin: 3px;">Done</button><button class="btn btn-primary btn-sm" type="button" style="float: right;margin: 3px;">Button</button><button class="btn btn-primary btn-sm"
                    type="button" style="float: right;margin: 3px;">Button</button></div>
        </div>
    </div>
</body>
</html>