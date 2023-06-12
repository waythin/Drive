@extends('layouts.main')

@section('main')


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
        {{-- <form action="" method="POST">
            {{csrf_field()}}
        
            <input type="text" name="name" placeholder="Name"> 
                @error('name')
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

        </form> --}}

        <div class="regbody">
            <div class="wrapperReg">
                <span class="close-icon">
                    <ion-icon name="close"></ion-icon>
                </span>
                <div class="form-box">
                    <h2>Registration</h2>
                    <form action="" method="POST">
                        {{csrf_field()}}

                        <div class="input-box">
                            <span class="icon"><ion-icon name="person"></ion-icon></span>
                            <input type="text" name="name">
                            <label for="">Name</label>
                            @error('name')
                                <span class="errorMsg"> {{$message}}</span>
                            @enderror
                        </div>

                        <div class="input-box">
                            <span class="icon"><ion-icon name="mail"></ion-icon></span>
                            <input type="text" name="email">
                            <label for="">Email</label>
                            @error('email')
                                <span class="errorMsg"> {{$message}}</span>
                            @enderror
                        </div>

                        <div class="input-box">
                            <span class="icon"><ion-icon name="phone-portrait"></ion-icon></span>
                            <input type="text" name="phone">
                            <label for="">Phone</label>
                            @error('phone')
                                <span class="errorMsg"> {{$message}}</span>
                            @enderror
                        </div>

                        <div class="input-box">
                            <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                            <input type="password" name="password">
                            <label for="">Password</label>
                            @error('password')
                                <span class="errorMsg"> {{$message}}</span>
                            @enderror
                        </div>
                        <div class="remember-forgot">
                            <label for=""><input type="checkbox" class="tikmark" name="tikmark">  I agree to the <a href="">terms & conditions</a></label>
                            @error('tikmark')
                                <span class="error"> {{$message}}</span>
                            @enderror
                            
                        </div>
                        <button type="submit" class="btn">Sign up</button>
                        <div class="login-register">
                            <p>Already have an account? 
                            <a href="" class="register-link">Login</a></p>
                        </div>
                    </form>
    
                </div>
            </div>
        </div>


</body>
</html>

@endsection