<!DOCTYPE html>
<html>
<head>
    <title>Raynor Doors of Nebraska </title>
</head>
<body>
    Hello {{$details['name']}},
    <p>Your user account has been successfully created.</p>
    <p>You can log in using the link below:</p>
    <p>Login URL: <a href="{{ url('/admin/login') }}">{{ url('/admin/login') }}</a></p>
    <p>Username: {{$details['email']}}</p>
    <p>Password: {{$pass['password']}}</p>
</body>
</html>