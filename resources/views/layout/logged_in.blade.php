<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Supply Request System</title>
</head>

<body style="margin: 0; padding: 0; font-family: sans-serif;">

    <div style="background-color: #343a40; padding: 10px 20px; text-align: right;">
        <a href="{{ route('login') }}"
            style="color: white; text-decoration: none; font-weight: bold; background-color: #dc3545; padding: 8px 16px; border-radius: 5px;">
            Logout
        </a>
    </div>

    @yield('content')

</body>

</html>