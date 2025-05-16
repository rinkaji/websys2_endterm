@extends('layout.logged_in')

@section('content')
<div style="padding: 40px; text-align: center; font-family: sans-serif; background-color: #f4f4f4; min-height: 100vh;">
    <h1 style="margin-bottom: 30px; font-size: 32px;">Dashboard</h1>

    <div style="display: flex; justify-content: center; gap: 30px; flex-wrap: wrap;">

        <a href=""
            style="display: block; width: 200px; padding: 20px; background-color: #17a2b8; color: white; text-decoration: none; border-radius: 10px; font-size: 20px; font-weight: bold; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            Supplies
        </a>

        <a href=""
            style="display: block; width: 200px; padding: 20px; background-color: #ffc107; color: black; text-decoration: none; border-radius: 10px; font-size: 20px; font-weight: bold; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            Requests
        </a>

        <a href="{{ route('user.view') }}"
            style="display: block; width: 200px; padding: 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 10px; font-size: 20px; font-weight: bold; box-shadow: 0 2px 8px rgba(0,0,0,0.1);">
            Users
        </a>

    </div>
</div>
@endsection