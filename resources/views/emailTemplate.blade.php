<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p><strong>Nom:</strong>{{ $dataReceived['name'] }}</p>
    <p><strong>Email:</strong>{{ $dataReceived['email'] }}</p>
    <p><strong>Contact:</strong>{{ $dataReceived['phone'] }}</p>
    <p><strong>Sujet:</strong>{{ $dataReceived['sujet'] }}</p>
    <br>
    <h1>Message: {{ $dataReceived['message'] }}</h1>
</body>
</html>