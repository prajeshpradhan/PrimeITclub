<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login V16</title>
    <meta charset="UTF-8">
</head>

<body>
    <form action="{{route('login')}}" method="POST">
        @csrf
        <div>
            <label for="email">Email</label><br>
            <input type="email" name="email" id="email">
        </div>
        <div>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
        </div>
        <div>
            <input type="submit" value="Login">
        </div>

    </form>
</body>

</html>