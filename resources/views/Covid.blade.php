<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COVID-19 Data</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>COVID-19 Statistics</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>User Id</th>
                    <th>id</th>
                    <th>title</th>
                    <th>body</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $country)
                    <tr>
                        <td>{{ $country['userId'] }}</td>
                        <td>{{ $country['id'] }}</td>
                        <td>{{ $country['title'] }}</td>
                        <td>{{ $country['body'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>