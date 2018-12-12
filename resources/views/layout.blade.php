<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <!-- Latest compiled and minified CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">



</head>

<body>
    <div class="container">
        <header>
            <div class="row">
                <div class="left col-md-6">
                    <a href="/">
                        <h1>LapTimeLV</h1>
                    </a>
                </div>
                <div class="text-right col-md-6">
                    <br>
                    <row>
                        @if (Auth::check())
                            <a href="/logout" class="btn btn-primary">Atslēgties</a>   <a href="/users/{{auth()->user()->username}}" class="btn btn-primary">{{auth()->user()->username}}</a>
                        @else
                            <a href="/login" class="btn btn-primary">Pieslēgties</a>   <a href="/register" class="btn btn-primary">Reģistrēties</a>
                        @endif
                    </row>
                    <br>
                    <row>
                        <a href="/users" class="btn btn-primary">Meklēt lietotāju</a>
                    </row>
                    <br>
                </div>
            </div>
        </header>
    </div>
    <div class="container">
        @yield('content')
    </div>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>

</html>