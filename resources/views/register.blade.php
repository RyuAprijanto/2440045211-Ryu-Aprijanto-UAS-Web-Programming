@extends('layouts.main')

@section('section')

<div class="register">
        <div class="form">
            <div class="borderForm">
                <h2>Register Account</h2>
                <form action="/register" method="post">
                    @csrf

                    <!-- Username -->

                    <label for="First Name">First Name</label>
                    <input type="text" id="username" name="username" placeholder="Please enter first name"><br>

                    <label for="Last Name">Last Name</label>
                    <input type="text" id="username" name="username" placeholder="Please enter last name"><br>

                    <!-- Email -->

                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" placeholder="Please enter your e-mail address"><br>


                    <!-- Password -->

                    <label for="psw">Password</label>
                    <input type="password" id="psw" placeholder="Enter Password" name="psw" required><br>

                    <!-- Confirm Password -->

                    <label for="psw-repeat">Confirm Password</label>
                    <input type="password" id="psw-repeat" placeholder="Repeat Password" name="psw-repeat" required><br>

                    <!-- Gender -->

                    <label for="gender">Gender</label><br>
                    <label for="male">Male</label>
                    <input type="radio" id="1" name="gender">
                    <label for="female">Female</label>
                    <input type="radio" id="2" name="gender">
                    <br>

                    <!-- Role -->

                    <label for="role">Role</label><br>
                    <label for="admin">Admin</label>
                    <input type="radio" id="1" name="role">
                    <label for="user">User</label>
                    <input type="radio" id="2" name="role">
                    <br><br>

                    <!-- PfP -->
                    <div class="mb-3">
                        <label for="name" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" placeholder="Image" name="image">
                        @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                        @endif
                    </div>

                    <!-- Submit -->

                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
