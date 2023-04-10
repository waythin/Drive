<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>


<body>
    <form action="" method="POST">
        {{csrf_field()}}
       
        <input type="text" name="name" value="{{$driver->name}}"> 
            @error('email')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="email" value="{{$driver->email}}">
            @error('email')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="phone" value="{{$driver->phone}}"> 
            @error('phone')
            <span> {{$message}}</span>
            @enderror
        <br>

        <input type="text" name="password" value="{{$driver->password}}"> 
            @error('password')
            <span> {{$message}}</span>
            @enderror
        <br>

        <a href="{{route('update', ['id' => $driver->id_driver])}}"> <button  type="submit"> Save </button></a>
        

    </form>
</body>

</html>