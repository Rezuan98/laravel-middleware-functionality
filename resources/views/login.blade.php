<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <form action="{{url('/OnLogin')}}" method="post">
        @csrf
    <input type="email" name="email" id="" placeholder="Enter your Email"><br>
    <input type="password" name="password" id="" placeholder="Enter your Password"> <br>
    <button>Login</button>
     
    </form>
</body>
</html>