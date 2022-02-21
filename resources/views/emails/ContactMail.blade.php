<!DOCTYPE html>
<html>
<head>
    <title>ItsolutionStuff.com</title>
</head>
<body>
    <h1> From : {{ $details['name'] }} and Email : {{ $details['email'] }} </h1>
    <h1>Subject : {{ $details['subject'] }}</h1>
    <p>Message : {{ $details['message'] }}</p>

    <hr/>
    <p>{{ env('APP_NAME') }}</p>
</body>
</html>
