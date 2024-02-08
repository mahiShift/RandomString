<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Random Sentences</title>
</head>
<style>
    body {
        font-family: "Roboto", sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        background: #efe2e2;
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
        color: #a4ef13;
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
        <a href="" class="btn btn-sm btn-primary">Refresh Sentences</a><br>
        <div class="card">
            <h2>Random Sentence</h2>
            @php $i = 1; @endphp
            @foreach ($unique_sentences as $sentence)
                <p>{{ $i++ }}: {{ $sentence }}</p>
            @endforeach
        </div>
    </div>
</body>

</html>
