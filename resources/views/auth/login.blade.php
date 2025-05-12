@extends('layout.master')

@section('content')
<form action="" method="post">
    <label for="">Username</label>
    <input type="text" name="username" id="" required>
    <label for="">Password</label>
    <input type="text" name="password" required>
    <input type="submit" value="Login">
</form>
@endsection