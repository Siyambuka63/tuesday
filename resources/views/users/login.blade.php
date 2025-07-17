<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('stylesheet/login.css') }}">

    <title>Log In</title>
</head>

<body>
    <form action="/users/authenticate" method="POST" style="border:1px solid #ccc">
        @csrf
        <div class="container">
            <h1>Log In</h1>
            <p>Please fill in this form to log into your account.</p>
            <hr>

            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="email" value="{{ old('email') }}" required>
			@error('email')
				<p class="error" style="color: red; font-size: 14px; padding: 0 0 15px 0; margin: 0;">
					{{ $message }}
				</p>
            @enderror

            <label for="password"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" value="{{ old('password') }}" required>
			@error('password')
				<p class="error" style="color: red; font-size: 14px; padding: 0 0 15px 0; margin: 0;">
					{{ $message }}
				</p>
			@enderror

            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>

            <p>Want to create an account? <a href="/signup" style="color:dodgerblue">Sign Up</a></p>

            <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="loginbtn">Log In</button>
            </div>
        </div>
    </form>
</body>

</html>
