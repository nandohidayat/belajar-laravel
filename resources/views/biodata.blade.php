<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel</title>
</head>
<body>
    <h1>Tutorial Laravel</h1>
    <a href="http://www.google.com/">www.google.com</a>
    <br>
    <p>Username: {{ $username }}</p>
    <p>My Skill</p>
    <ul>
        @foreach ($skill as $s)
        <li>{{ $s }}</li>
        @endforeach
    </ul>
</body>
</html>