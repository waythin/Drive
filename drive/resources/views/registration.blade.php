<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registraiton</title>

    <h1>Registration</h1>
</head>




<body>
    <form action="" method="POST">
        {{csrf_field()}}
       
        <input type="text" name="name" placeholder="Name"> 
            @error('email')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="email" placeholder="Email">
            @error('email')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="phone" placeholder="Phone"> 
            @error('phone')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="password" placeholder="Password"> 
            @error('password')
            <span> {{$message}}</span>
            @enderror
        <br>

        <button  type="submit">Create Account</button>

    </form>
</body>
</html>