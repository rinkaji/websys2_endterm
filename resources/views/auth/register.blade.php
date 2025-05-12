@extends('layout.master')

@section('content')
<form action="" method="post">
    <label for="">Id number</label>
    <input type="text" name="id" required>
    <label for="">Name</label>
    <input type="text" name="name" id="" required>
    <label for="">Username</label>
    <input type="text" name="username" id="" required>
    <label for="">Password</label>
    <input type="text" name="password" required>
    <input type="submit" value="register">
</form>
@endsection