@extends('layouts.layout')

@section('content')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 20px;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        h2 {
            margin-bottom: 20px;
            color: #333333;
        }

        p {
            margin-bottom: 20px;
            font-size: 18px;
            color: #666666;
        }

        button {
            padding: 10px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <h2>Dashboard</h2>
        <p>Welcome to your dashboard!</p>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Logout</button>
        </form>
    </div>
@endsection

