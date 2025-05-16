@extends('layout.logged_out')

@section('content')
<form action="" method="post" style="display: flex; flex-direction: column; gap: 15px;">
    @csrf

    <label for="username" style="font-weight: bold;">Username</label>
    <input type="text" name="username" id="username" required
        style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

    <label for="password" style="font-weight: bold;">Password</label>
    <input type="password" name="password" id="password" required
        style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

    <input type="submit" value="Login"
        style="padding: 12px; background-color: #0056b3; color: white; font-size: 16px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;">
</form>
@endsection