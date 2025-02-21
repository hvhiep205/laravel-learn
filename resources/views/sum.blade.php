<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tính Tổng</title>
    <link rel="stylesheet" href="../../public/assets/sum.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        form {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
        }

        input {
            width: calc(50% - 12px);
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #5cb85c;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }

        h2 {
            text-align: center;
            color: #5cb85c;
        }
    </style>
</head>
<body>
    <h1>Tính Tổng Hai Số</h1>
    <form action="/sum" method="POST">
        @csrf
        <input type="number" name="number1" placeholder="Số thứ nhất" required>
        <input type="number" name="number2" placeholder="Số thứ hai" required>
        <button type="submit">Tính Tổng</button>
    </form>

    @if(isset($sum))
        <h2>Tổng: {{ $sum }}</h2>
    @endif
</body>
</html>