<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        font-family: "Roboto", sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #111;
        color: #fff;
    }

    .container {
        width: 100%;
        max-width: 400px;
        padding: 0 20px;
        box-sizing: border-box;
    }

    .card {
        width: 100%;
        background-color: #333;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.6);
    }

    h2 {
        text-align: center;
        color: #fff;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    input {
        padding: 10px;
        margin-bottom: 12px;
        border: 1px solid #555;
        border-radius: 4px;
        transition: border-color 0.3s ease-in-out;
        outline: none;
        color: #121111;
    }

    input:focus {
        border-color: #3498db;
    }

    button {
        background-color: #3498db;
        color: #fff;
        padding: 10px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s ease-in-out;
    }

    button:hover {
        background-color: #2980b9;
    }
</style>

<body>
    <div class="container">
        <div class="card">

            @if (session('success'))
                <div class="alert alert-success" id="success-message">
                    {{ session('success') }}
                </div>
            @endif
            <h2>Login</h2>
            <form action="{{ route('login') }}" method="post">
                @csrf
                <!-- <input type="text" id="username" name="username" placeholder="Username" required> -->
                <input type="password" id="password" name="password" placeholder="Password" required>
                <button type="submit">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
