<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Applicant Management') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        <h1>Applicant Management System</h1>
        <nav>
            <a href="{{ route('applicants.index') }}">Home</a>
            <a href="{{ route('logout') }}">Logout</a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
