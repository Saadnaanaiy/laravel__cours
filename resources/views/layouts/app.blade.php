<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Competition Management')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('competitions.index') }}">🏆 Competitions</a>
            <a class="navbar-brand" href="{{ route('participants.index') }}">🙎‍♂️ participants</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('competitions.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white px-3" href="{{ route('competitions.create') }}">+
                            New Competition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-success text-white px-3" href="{{ route('participants.create') }}">+
                            New Participant</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </div>
    <div class="container">
        @yield('content')
    </div>

</body>

</html>
