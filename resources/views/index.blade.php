<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>
<body>
    <form action="{{url('/insert')}}" method="post">
        @csrf
      <h1>Register First</h1>
        <input type="text" name="name" placeholder="Enter Your Name"> <br>
        <input type="email" name="email" placeholder="Enter Your Email"><br>
        <input type="password" name="password" placeholder="Enter Your password"><br>
        <button>Submit</button>
        <a href="{{url('/login')}}">Login</a>

    </form>
</body>
</html>