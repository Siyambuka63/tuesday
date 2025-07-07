<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('stylesheet/signup.css') }}">

    <title>Sign Up</title>
</head>

<body>
    <form method="POST" action="/users" style="border:1px solid #ccc">
      @csrf
        <div class="container">
            <h1>Sign Up</h1>
            <p>Please fill in this form to create an account.</p>
            <hr>

            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Enter Name" name="name" value="{{ old('name') }}" required>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="{{ old('email')}}" required>
            @error('email')
                <p class ="error" style="color: red; font-size: 14px; padding: 0 0 15px 0; margin: 0;">
                    {{ $message }}
                </p>
            @enderror

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" value="{{ old('password')}}" required>
            @error('password')
                <p class ="error" style="color: red; font-size: 14px; padding: 0 0 15px 0; margin: 0;">
                    {{ $message }}
                </p>
            @enderror

            <label for="password_confirmation"><b>Confirm password</b></label>
            <input type="password" placeholder="Confirm Password" name="password_confirmation" value="{{ old('password_confirmation')}}" required>
            @error('password_confirmation')
                <p class ="error" style="color: red; font-size: 14px; padding: 0 0 15px 0; margin: 0;">
                    {{ $message }}
                </p>
            @enderror

            <p>Already have an account? <a href="/login" style="color:dodgerblue">Log In</a></p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="signupbtn">Sign Up</button>
            </div>
        </div>
    </form>
</body>

</html>
