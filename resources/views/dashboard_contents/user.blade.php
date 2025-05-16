@extends('layout.logged_in')

@section('content')
<div style="padding: 40px; font-family: sans-serif; background-color: #f4f4f4; min-height: 100vh;">

    <h1 style="font-size: 28px; margin-bottom: 20px; text-align: center; color: #333;">User Management</h1>

    <div
        style="max-width: 800px; margin: 0 auto; background: white; padding: 30px; border-radius: 10px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <p style="font-size: 18px; color: #555;">
            This page allows you to view and manage users in the Supply Request System.
        </p>

        <!-- Placeholder for future user table or cards -->
        <div style="margin-top: 30px; text-align: center; color: #888;">
            <table style="width: 100%; border-collapse: collapse; margin-bottom: 30px; font-size: 16px;">
                <thead>
                    <tr style="background-color: #007BFF; color: white;">
                        <th style="padding: 12px; text-align: left; border-bottom: 2px solid #ccc;">ID</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 2px solid #ccc;">Name</th>
                        <th style="padding: 12px; text-align: left; border-bottom: 2px solid #ccc;">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr style="background-color: #f9f9f9; border-bottom: 1px solid #eee;">
                        <td style="padding: 10px;">{{ $user->id }}</td>
                        <td style="padding: 10px;">{{ $user->name }}</td>
                        <td style="padding: 10px;">
                            <a href=""
                                style="margin-right: 10px; padding: 6px 12px; background-color: #17a2b8; color: white; text-decoration: none; border-radius: 4px;">
                                Edit
                            </a>
                            <a href="" onclick="return confirm('Are you sure you want to delete this user?')"
                                style="padding: 6px 12px; background-color: #dc3545; color: white; text-decoration: none; border-radius: 4px;">
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <a href=""
                style="display: inline-block; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; font-weight: bold;">
                + Add New User
            </a>
        </div>
    </div>

</div>
@endsection