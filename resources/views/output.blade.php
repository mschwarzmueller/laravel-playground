<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row text-center">
        <div class="col-xs-10 col-xs-offset-1">
            <h1>Your Input</h1>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-xs-10 col-xs-offset-1">
            <a href="{{ route('welcome') }}">Back</a>
        </div>
    </div>
    <div class="row text-center">
        <div class="col-xs-10 col-xs-offset-1">
            {!! $content !!}
        </div>
    </div>
</div>
</body>
</html>
