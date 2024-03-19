<!DOCTYPE html>
<html>
<head>
    <title>Список загруженных файлов</title>
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

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
        a {
            text-decoration: none;
            color: #333;
            pointer-events: none;
        }

    </style>
</head>
<body>

<div class="container">
    <h1>Список загруженных файлов</h1>

    <ul>
        @foreach ($files as $file)
            <li>{{ $file->filename }}</li>
        @endforeach
    </ul>
</div>

</body>
</html>
