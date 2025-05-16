<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body style="font-family: sans-serif; background-color: #f9f9f9; margin: 0; padding: 0;">

    <div style="text-align: center; padding: 40px 20px;">
        <a href="{{ route('login') }}"
            style="display: inline-block; padding: 15px 30px; background-color: #0056b3; color: white; text-decoration: none; border-radius: 8px; font-size: 24px; font-weight: bold; margin: 10px;">
            Login
        </a>
        <a href="{{ route('register') }}"
            style="display: inline-block; padding: 15px 30px; background-color: #28a745; color: white; text-decoration: none; border-radius: 8px; font-size: 24px; font-weight: bold; margin: 10px;">
            Register
        </a>
    </div>

    <div
        style="max-width: 400px; margin: 0 auto; padding: 20px; background: white; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        @yield('content')
    </div>

</body>

</html>