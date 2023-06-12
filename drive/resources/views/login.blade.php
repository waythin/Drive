@extends('layouts.main')

@section('main')
    


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

      

    </head>

    <body >

        {{-- <div class="login1">
            <center>
            <div class="login2">
                <h3>Login</h3>

                <form action="" method="POST">
                    {{csrf_field()}}
                
                    <input type="text" name="name" placeholder="Name" required> 
                        @error('name')
                        <span> {{$message}}</span>
                        @enderror
                    <br>
        
                    <input type="text" name="password" placeholder="Password" required> 
                        @error('password')
                        <span> {{$message}}</span>
                        @enderror
                    <br>
        
                    <button  type="submit">Login</button>
                </form>
            </div> 
        </center>
        </div> --}}

        {{-- <h1>login</h1> --}}
        

        <div class="loginbody">
            <div class="wrapper">
                <span class="close-icon">
                    <ion-icon name="close"></ion-icon>
                </span>
                <div class="form-box">
                    <h2>login</h2>
                    <form action="" method="POST">
                        {{csrf_field()}}

                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="text" name="email" required="required">
                            <label for="">Email</label>
                            @error('email')
                            <span class="errorMsg"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" name="password" required="required">
                            <label for="">Password</label>
                            @error('password')
                            <span class="errorMsg"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="remember-forgot">
                            <label for=""><input type="checkbox" class="tikmark" name="remember"> Remember me</label>
                            <a href="">Forgot Password?</a>
                        </div>
                        <button type="submit" class="btn">Login</button>
                        <div class="login-register">
                            <p>Don't have an account? 
                            <a href="" class="register-link">Register</a></p>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>
        
    </body>
</html>

@endsection