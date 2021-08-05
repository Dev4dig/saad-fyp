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
    <div class="container-fluid" style="margin: 10px; border-radius: 10px;border: 1px solid rgb(225,216,216);margin-top: 20px;/*padding-top: 10px;*/">
        <div class="row" style="height: auto;background-color: rgb(241,241,241);border: 1px solid rgb(222,218,218);">
            <div class="col">
                <h5 style="vertical-align: middle;margin-top: 6px;font-family: monospace;">By: Yashar Ali&nbsp; Department : English Roll No: 12323 Sem: 5th</h5>
            </div>
        </div>
        <h3 style="margin-top: 10px;">The One who keeps me awake at night</h3>
        <p style="/*margin: 40px;*/padding: 0px;">A lot of dummy text is needed&nbsp;<br>A lot of dummy text is needed<br><br>A lot of dummy text is needed<br><br>A lot of dummy text is needed<br><br>A lot of dummy text is needed<br><br>A lot of dummy text is needed<br><br>A lot of dummy text
            is needed<br><br>A lot of dummy text is needed<br><br>A lot of dummy text is needed<br><br>A lot of dummy text is needed<br><br></p>
        <div class="row" style="height: auto;/*width: 780px;*/">
            <div class="col" style="/*width: 1014px;*/background-color: rgb(237,237,237);"><button class="btn btn-success btn-sm" type="button" style="float: right;margin: 2px;">Approve</button><button class="btn btn-danger btn-sm" type="button" style="float: right;margin: 2px;">Reject</button><button class="btn btn-info btn-sm"
                    type="button" style="float: right;margin: 2px;">Finalize</button><span class="badge badge-warning"></span><span class="badge badge-warning" style="padding: 8px;/*margin-left: 35px;*/vertical-align: middle;margin-top: 5px;">pending</span>
                <button
                    class="btn btn-info btn-sm" type="button" style="float: right;margin: 2px;">Send for editing</button>
            </div>
        </div>
    </div>
    <div class="card" style="padding-top: 10px;">
        <h4 style="margin-left: 20px;">Comments</h4>
        <x-comment_card />
        <x-comment_card />
        <x-comment_card />
        <x-comment_card />
        
    </div>
</body>
</html>