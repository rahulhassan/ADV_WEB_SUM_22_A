
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Business App</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Business</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
            <a class="nav-link" href="{{route('homePage')}}">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('servicePage')}}">Service</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('ourTeams')}}">Our Team</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('aboutUs')}}">About Us</a>
            </li>
        </ul>
        </div>
    </nav>
    @yield('content')
    </body>
</html>