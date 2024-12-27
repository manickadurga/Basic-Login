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

        form {
            display: flex;
            flex-direction: column;
        }

        form div {
            margin-bottom: 15px;
        }

        label {
            margin-bottom: 5px;
            font-weight: bold;
            color: #555555;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 4px;
            font-size: 16px;
        }

        .error {
            color: red;
            font-size: 14px;
            margin-top: 5px;
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
        <h2>Register</h2>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>
                @if ($errors->has('name'))
                    <span class="error">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="error">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                @if ($errors->has('password'))
                    <span class="error">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div>
                <label for="password_confirmation">Confirm Password:</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>
                @if ($errors->has('password_confirmation'))
                    <span class="error">{{ $errors->first('password_confirmation') }}</span>
                @endif
            </div>
            <button type="submit">Register</button>
        </form>
    </div>
@endsection



