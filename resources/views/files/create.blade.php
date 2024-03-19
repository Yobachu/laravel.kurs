<!DOCTYPE html>
<html>
<head>
    <title>Upload files</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            text-align: center;
        }

        input[type="file"] {
            margin-bottom: 10px;
        }

        button {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
        .toList {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #c0d8c1;
        }
        a {
            display: block;
            margin-top: 20px;
            text-align: center;
            text-decoration: none;
            color: #333;
        }
    </style>
</head>

<body>

<div class="container">
    <h1>Загрузка файла</h1>

    @if ($message = Session::get('success'))
        <div style="background-color: #dff0d8; color: #3c763d; border: 1px solid #d6e9c6; padding: 10px; border-radius: 3px; margin-bottom: 20px;">
            <strong>{{ $message }}</strong>
        </div>
    @endif

    <form action="{{ route('files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <br>
        <button type="submit">Загрузить файл</button>
    </form>

    <a href="{{ route('files.index') }}">К списку загруженных файлов</a>
</div>


</body>
</html>
