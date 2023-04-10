<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <h1>Login</h1>
</head>

<body>
    <form action="" method="POST">
        {{csrf_field()}}
       
        <input type="text" name="name" placeholder="Name"> 
            @error('name')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="password" placeholder="Password"> 
            @error('password')
            <span> {{$message}}</span>
            @enderror
        <br>

        <button  type="submit">Login</button>

    </form>
</body>
</html>