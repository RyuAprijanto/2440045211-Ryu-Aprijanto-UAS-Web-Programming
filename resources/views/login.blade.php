@extends('layouts.main')

@section('section')

<div class="loginContainer">
    <div class = "loginText">
    </div>
    
    <div class="login">
        <form action="/login" method="post">
            @csrf
            <div class="form">
                <div class="borderForm">
                    <h1>Login</h1>
                    <label for="email">Email Address</label>
                    <input type="text" id="email" name="email" placeholder="Please enter your e-mail address"><br>

                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password"><br>>
                    
                    <input type="checkbox" name="remember_me" id="remember_me">
                    <label for="remember_me">Remember Me</label><br>        
                    <input type="submit" value="Submit">
                </div>
            </div>
        </form>
    </div>
</form>

</div>
@endsection