@extends('layout.logged_out')

@section('content')
<form action="" method="post" style="display: flex; flex-direction: column; gap: 15px;">
    @csrf
    <!-- Add this for Laravel's CSRF protection -->

    <label for="name" style="font-weight: bold;">Name</label>
    <input type="text" name="name" id="name" required
        style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

    <label for="username" style="font-weight: bold;">Email</label>
    <input type="email" name="email" id="email" required
        style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

    <label for="password" style="font-weight: bold;">Password</label>
    <input type="password" name="password" id="password" required
        style="padding: 10px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">

    <input type="submit" value="Register"
        style="padding: 12px; background-color: #28a745; color: white; font-size: 16px; font-weight: bold; border: none; border-radius: 5px; cursor: pointer;">
</form>
@endsection