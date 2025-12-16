<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Mail</title>
</head>
<body>
    <h4>Admin Successfully Logged In</h4>
    <h2>{{$detail->email}}</h2>
    <img src="{{$message->embed($image)}}" alt="Image Loading">
</body>
</html>