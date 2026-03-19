<!DOCTYPE html>
<html>
<head>
    <title>Raynor Doors of Nebraska</title>
</head>
<body>
    <h1>Welcome To Raynor Doors of Nebraska</h1>
    <h4>To reset Your Password Click on Below link.</h4>
    <p><a href="{{ route('reset.pass.store.view', ['token' => $token]) }}" class="common-btn12">Change Password</a></p>
    <p>Thank you</p>
</body>
</html>